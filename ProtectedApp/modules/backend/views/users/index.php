<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'bread-home'=>array(
        'icon'=>1,
        "class"=>'glyphicons home',
        'url'=>Yii::app()->createUrl('admin'),
        "text"=>Yii::t('backend','template.home')
    ),
	'bread-Users'=>array(
        'icon'=>1,
        "class"=>'glyphicons Users',
        'url'=>Yii::app()->createUrl('Users/index'),
        "text"=>Yii::t('backend','db.tblUsers')
    )
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
$('#users_grid').yiiGridView('update', {
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
        <a class="btn btn-primary btn-icon glyphicons circle_plus" href="<?php echo Yii::app()->createUrl('users/create')?>"><i></i>
            <?php echo Yii::t('backend','title.add').' '.Yii::t('backend','db.tblUsers')  ?>        </a>
    </div>
</div>
<div class="separator bottom"></div>

<div class="innerLR">
    <div class="widget">
        <div class="widget-head"><h4 class="heading glyphicons list"><i></i><?php echo Yii::t('backend','title.list')." ".Yii::t('backend','db.tblUsers') ?> </h4></div>
        <div class="widget-body">
            <div id="users_grid_mess">
                <?php echo Yii::app()->user->getFlash('mess'); ?>            </div>
            <!-- search-form -->
            <?php $change_title="changeTitle('".'<i></i>'.Yii::t('backend','btn.search.show')."','".'<i></i>'.Yii::t('backend','btn.search.hide')."',this);"; ?>            <?php echo CHtml::link('<i></i>'.Yii::t('backend','btn.search.show'),'#',array('class'=>'glyphicons search search-button btn btn-small btn-primary','onclick'=>$change_title)); ?>            <div class="separator bottom"></div>
            <div class="search-form" style="display:none">
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
            <!-- end search-form -->
            <form name="frm_grid_users" method="post" action="">
<?php                $value_cookie = Yii::app()->request->cookies->contains('page_show') ?
                    Yii::app()->request->cookies['page_show']->value : Yii::app()->params['grid.page_row_show'];
                $params_option=Yii::app()->params['grid.array_option_page_show'];
                $array_option_page_show='';
                foreach($params_option as $value){
                    $selected='';
                    if($value==$value_cookie){
                        $selected='selected="selected"';
                    }
                    $array_option_page_show.='<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                }
                ?>

<?php $this->widget('application.modules.backend.extensions.widgets.AdminGridView', array(
'id'=>'users_grid',
'dataProvider'=>$model->search(),
'pagerCssClass'=>'pagination pagination-small pull-right',
'summaryCssClass'=>'separator bottom form-inline small',
'ajaxUpdate'=>true,
'emptyText'=>Yii::t('backend','grid.row_empty'),
'urlPageShow'=>Yii::app()->createUrl('users/pageShow'),
'array_option_page_show'=>$array_option_page_show,
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
'myPageSize'=>$value_cookie,
'itemsCssClass'=>'table table-bordered table-condensed table-striped table-primary table-vertical-center table-fixed',
'showNo'=>true,
'showCheckBox'=>true,
'valueFiledCheckBox'=>'user_id',
'nameForm'=>'frm_grid_users',
'afterAjaxUpdate'=>'function(){$("#users_grid_table").fixedTable();}',
'columns'=>array(
array('header'=>Yii::t('backend','db.tblusers.user_id'),'type' => 'raw','name'=>'user_id','value'=>'CHtml::encode($data["user_id"])',),array('header'=>Yii::t('backend','db.tblusers.user_name'),'type' => 'raw','name'=>'user_name','value'=>'CHtml::encode($data["user_name"])',),		/*
array('header'=>Yii::t('backend','db.tblusers.password'),'type' => 'raw','name'=>'password','value'=>'CHtml::encode($data["password"])',),array('header'=>Yii::t('backend','db.tblusers.email'),'type' => 'raw','name'=>'email','value'=>'CHtml::encode($data["email"])',),array('header'=>Yii::t('backend','db.tblusers.full_name'),'type' => 'raw','name'=>'full_name','value'=>'CHtml::encode($data["full_name"])',),array('header'=>Yii::t('backend','db.tblusers.is_management'),'type' => 'raw','name'=>'is_management','value'=>'CHtml::encode($data["is_management"])',),array('header'=>Yii::t('backend','db.tblusers.is_active'),'type' => 'raw','name'=>'is_active','value'=>'CHtml::encode($data["is_active"])',),array('header'=>Yii::t('backend','db.tblusers.is_ban'),'type' => 'raw','name'=>'is_ban','value'=>'CHtml::encode($data["is_ban"])',),array('header'=>Yii::t('backend','db.tblusers.is_delete'),'type' => 'raw','name'=>'is_delete','value'=>'CHtml::encode($data["is_delete"])',),array('header'=>Yii::t('backend','db.tblusers.create_date'),'type' => 'raw','name'=>'create_date','value'=>'CHtml::encode($data["create_date"])',),array('header'=>Yii::t('backend','db.tblusers.update_date'),'type' => 'raw','name'=>'update_date','value'=>'CHtml::encode($data["update_date"])',),		*/
array(
'class'=>'application.modules.backend.extensions.widgets.AdminCButtonColumn',
'viewButtonOptions'=>array('class'=>'btn-action glyphicons eye_open btn-info'),
'updateButtonOptions'=>array('class'=>'btn-action glyphicons pencil btn-success'),
'deleteButtonOptions'=>array('class'=>'btn-action glyphicons remove_2 btn-danger'),
'afterDelete'=>'function(control,flag,data){$("#users_grid_mess").html(data)}',
'htmlOptions'=>array('class'=>'center','style'=>'width: 100px;')
),
),
)); ?>
    <?php                if(Yii::app()->request->enableCsrfValidation)
                {
                    $csrfTokenName = Yii::app()->request->csrfTokenName;
                    $csrfToken = Yii::app()->request->csrfToken;
                    $csrf = ",{ '$csrfTokenName':'$csrfToken' }";
                }
                else
                    $csrf = '';
                ?>
                <div style="width: 120px;" class="separator pull-left checkboxs_actions " >
                    <div class="row-fluid">
                        <select onchange="verifyCheck('users_grid','frm_grid_users','<?php echo Yii::t('backend','alert.title') ?>','<?php echo Yii::t('backend','grid.action.mess.confirm.delete') ?>','<?php echo Yii::t('backend','grid.not.row.select') ?>',this.value<?php echo $csrf; ?>);" class="selectpicker span12" data-style="btn-default btn-small ">
                            <option value="<?php echo Yii::app()->createUrl('users/deleteCheck')?>"><?php echo Yii::t('backend','grid.action.delete') ?></option>
                        </select>
                    </div>
                </div>
                <div class="clearfix" style="clear: both; "></div>
            </form>
        </div>
    </div>
</div>
