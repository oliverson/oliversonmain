<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>
<ul class="breadcrumb">
    <li>
        <a class="glyphicons home" href="index.html?lang=en">
            <i></i>
            <?php echo Yii::t('backend','template.home') ?>
        </a>
    </li>
    <li class="divider"></li>
    <li>Calendar</li>
</ul>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
