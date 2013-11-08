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
    'bread-Users-create'=>array(
        'icon'=>0,
        "class"=>'',
        'url'=>'',
        "text"=>Yii::t('backend','mn.tblUsersCreate')
    )
);
?>
<h3><?php echo Yii::t('backend','title.create').' '.Yii::t('backend','db.tblUsers')  ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model,'title'=>Yii::t('backend','title.create').' '.Yii::t('backend','db.tblUsers'))); ?>