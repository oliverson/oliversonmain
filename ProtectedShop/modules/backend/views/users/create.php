<?php
/* @var $this UsersController */
/* @var $model Users */

?>
<h1><?php echo Yii::t('backend','title.create').' '.Yii::t('backend','db.tblUsers')  ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>