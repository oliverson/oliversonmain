<?php
/* @var $this UsersController */
/* @var $model Users */
?>
<div class="separator bottom"></div>
<?php echo $this->renderPartial('_form', array('model'=>$model,'title'=>Yii::t('backend','title.update').' '.Yii::t('backend','db.tblUsers').$model->user_id)); ?>