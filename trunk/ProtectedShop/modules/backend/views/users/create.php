<?php
/* @var $this UsersController */
/* @var $model Users */

?>
<div class="separator bottom"></div>
<?php echo $this->renderPartial('_form', array('model'=>$model,'title'=>Yii::t('backend','title.create').' '.Yii::t('backend','db.tblUsers') )); ?>