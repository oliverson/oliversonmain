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

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="innerLR">
    <div class="widget">
        <div class="widget-head"><h4 class="heading glyphicons list"><i></i>Danh Sách Users</h4></div>
        <div class="widget-body">
            <form name="frm_grid_users" method="post" action="<?php Yii::app()->createUrl('users/deleteSelected') ?>">
            <?php $this->widget('application.modules.backend.extensions.widgets.AdminGridView', array(
                'dataProvider'=>$model->search(),
                'id'=>'users-grid',
                'pager'=> array('class'=>'application.modules.backend.extensions.widgets.LinkPager'),
                'myPageSize'=>10,
                'itemsCssClass'=>'table table-bordered table-condensed table-striped table-no1 table-vertical-center checkboxs',
                'showNo'=>true,
                'showCheckBox'=>true,
                'valueFiledCheckBox'=>'user_id',
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
                ),
            )); ?>
            </form>
        </div>
    </div>
</div>
