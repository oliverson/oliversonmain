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
    ),
    'bread-Users-view'=>array(
        'icon'=>0,
        "class"=>'',
        'url'=>'',
        "text"=>Yii::t('backend','mn.tblUsersview')
    )
);
?>
<div class="separator bottom"></div>
<div class="innerLR">
    <div class="widget">
        <div class="widget-head">
            <h4 class="heading"><?php echo Yii::t('backend','title.view').' '.Yii::t('backend','db.tblUsers').$model->user_id;  ?></h4>
        </div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
    'htmlOptions'=>array(
        'class'=>'table table-bordered table-condensed table-striped table-primary table-vertical-center'
    ),
    'itemTemplate'=>"<tr class=\"selectable\"><td style='width: 100px;font-weight: bold;'>{label}</td><td>{value}</td></tr>\n",
	'attributes'=>array(
		'user_id',
		'user_name',
		'password',
		'email',
		'full_name',
		'is_management',
		'is_active',
		'is_ban',
		'is_delete',
		'create_date',
		'update_date',
	),
)); ?>
    </div>
</div>
