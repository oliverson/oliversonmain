<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Users', 'url'=>array('index')),
array('label'=>'Create Users', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#users-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>
<div class="separator bottom"></div>
<div class="heading-buttons">
    <h3><?php echo Yii::t('backend','title.manager').' '.Yii::t('backend','db.tblUsers')  ?></h3>
    <div class="buttons pull-right">
        <a class="btn btn-primary btn-icon glyphicons circle_plus" href="">
            <i></i>
            Add booking
        </a>
    </div>
</div>
<div class="separator bottom"></div>

<div class="innerLR">
    <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-block btn-default')); ?>
    <div class="search-form" style="display:none">
        <div class="separator bottom"></div>
        <div class="widget">
            <div class="widget-head"><h4 class="heading glyphicons search"><i></i><?php echo Yii::t('backend','title.search') ?></h4></div>
            <div class="widget-body">
                <?php $this->renderPartial('_search',array(
                    'model'=>$model,
                )); ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="separator bottom"></div>
<!-- search-form -->
<div class="innerLR">
    <div class="widget">
        <div class="widget-head"><h4 class="heading glyphicons list"><i></i><?php echo Yii::t('backend','title.list') ?> Users</h4></div>
        <div class="widget-body">
            <form name="frm_grid_users" method="post" action="<?php Yii::app()->createUrl('users/deleteSelected') ?>">
            <?php $this->widget('application.modules.backend.extensions.widgets.AdminGridView', array(
                'dataProvider'=>$model->search(),
                'id'=>'users-grid',
                'pagerCssClass'=>'pagination pagination-small pull-right',
                'summaryCssClass'=>'separator bottom form-inline small',
                'ajaxUpdate'=>false,
                'emptyText'=>Yii::t('backend','grid.row_empty'),
                'pager'=> array(
                    'cssFile'=>false,
                    'class'=>'application.modules.backend.extensions.widgets.LinkPager',
                    'header'=>'<ul>',
                    'footer'=>'</ul>',
                    'nextPageLabel'=>'»',
                    'prevPageLabel'=>'«',
                    'htmlOptions'=>array(
                        'class'=>'pagination pagination-small pull-right'),
                ),
                'myPageSize'=>10,
                'itemsCssClass'=>'table table-bordered table-condensed table-striped table-primary table-vertical-center',
                'showNo'=>true,
                'showCheckBox'=>true,
                'valueFiledCheckBox'=>'user_id',
                'nameForm'=>'frm_grid_users',
                'columns'=>array(
                    array(
                        'header'=>'password',
                        'type' => 'raw',
                        'name'=>'password',
                        'value'=>'CHtml::encode($data["password"])',
                    ),
                    array(
                        'header'=>'email',
                        'type' => 'raw',
                        'name'=>'email',
                        'value'=>'CHtml::encode($data["email"])',
                    ),
                    array(
                        'header'=>'user_name',
                        'type' => 'raw',
                        'name'=>'user_name',
                        'value'=>'CHtml::encode($data["user_name"])',
                    ),
                    array(
                        'class'=>'application.modules.backend.extensions.widgets.AdminCButtonColumn',
                        'viewButtonOptions'=>array('class'=>'btn-action glyphicons eye_open btn-info'),
                        'updateButtonOptions'=>array('class'=>'btn-action glyphicons pencil btn-success'),
                        'deleteButtonOptions'=>array('class'=>'btn-action glyphicons remove_2 btn-danger'),
                        'htmlOptions'=>array('class'=>'center')
                    ),
                ),
            )); ?>
                <?php
                if(Yii::app()->request->enableCsrfValidation)
                {
                    $csrfTokenName = Yii::app()->request->csrfTokenName;
                    $csrfToken = Yii::app()->request->csrfToken;
                    $csrf = ",{ '$csrfTokenName':'$csrfToken' }";
                }
                else
                    $csrf = '';
                ?>
                <div class="separator pull-left checkboxs_actions ">
                    <select onchange="verifyCheck('users-grid','frm_grid_users','test','delete','not',this.value<?php echo $csrf; ?>);" class="selectpicker" data-style="btn-default btn-small">
                        <option value="<?php echo Yii::app()->createUrl('users/deleteCheck')?>">Action1</option>
                        <option>Action2</option>
                        <option>Action3</option>
                    </select>
                </div>
        <div class="clearfix" style="clear: both"></div>
            </form>
        </div>
    </div>
</div>
