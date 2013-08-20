<?php
/* @var $this UsersController */
/* @var $model Users */
?><h3><?php echo Yii::t('backend','title.update').' '.Yii::t('backend','db.tblUsers').$model->user_id;  ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>