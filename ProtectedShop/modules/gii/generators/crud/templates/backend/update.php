<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
<?php
echo "\$this->breadcrumbs=array(
	'bread-home'=>array(
        'icon'=>1,
        \"class\"=>'glyphicons home',
        'url'=>Yii::app()->createUrl('admin'),
        \"text\"=>Yii::t('backend','template.home')
    ),
	'bread-".$this->modelClass."'=>array(
        'icon'=>1,
        \"class\"=>'glyphicons ".$this->modelClass."',
        'url'=>Yii::app()->createUrl('".$this->modelClass."/index'),
        \"text\"=>Yii::t('backend','db.tbl".$this->modelClass."')
    ),
    'bread-".$this->modelClass."-update'=>array(
        'icon'=>0,
        \"class\"=>'',
        'url'=>'',
        \"text\"=>Yii::t('backend','mn.tbl".$this->modelClass."Update')
    )
);\n";
echo "?>";
?>
<h3><?php echo "<?php echo Yii::t('backend','title.update').' '.Yii::t('backend','db.tbl$this->modelClass').\$model->{$this->tableSchema->primaryKey};  ?>"; ?></h3>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model,'title'=>Yii::t('backend','title.update').' '.Yii::t('backend','db.tblUsers').\$model->user_id)); ?>"; ?>