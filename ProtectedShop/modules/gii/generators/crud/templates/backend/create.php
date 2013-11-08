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
    'bread-".$this->modelClass."-create'=>array(
        'icon'=>0,
        \"class\"=>'',
        'url'=>'',
        \"text\"=>Yii::t('backend','mn.tbl".$this->modelClass."Create')
    )
);\n";
echo "?>";
$label=$this->pluralize($this->class2name($this->modelClass));
?>

<h3><?php echo "<?php echo Yii::t('backend','title.create').' '.Yii::t('backend','db.tbl$this->modelClass')  ?>"; ?></h3>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model,'title'=>Yii::t('backend','title.create').' '.Yii::t('backend','db.tblUsers'))); ?>"; ?>
