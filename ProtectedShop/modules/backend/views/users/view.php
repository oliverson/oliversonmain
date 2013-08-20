<?php
/* @var $this UsersController */
/* @var $model Users */

?>
<h3><?php echo Yii::t('backend','title.view').' '.Yii::t('backend','db.tblUsers').$model->user_id;  ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
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
