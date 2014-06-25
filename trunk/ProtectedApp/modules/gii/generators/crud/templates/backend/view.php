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
    'bread-".$this->modelClass."-view'=>array(
        'icon'=>0,
        \"class\"=>'',
        'url'=>'',
        \"text\"=>Yii::t('backend','mn.tbl".$this->modelClass."view')
    )
);\n";
echo "?>";

$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
?>

<div class="separator bottom"></div>
<div class="innerLR">
    <div class="widget">
        <div class="widget-head">
            <h4 class="heading"><?php echo "<?php echo Yii::t('backend','title.view').' '.Yii::t('backend','db.tblUsers').\$model->user_id;  ?>"?></h4>
        </div>
<?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
    'htmlOptions'=>array(
        'class'=>'table table-bordered table-condensed table-striped table-primary table-vertical-center'
    ),
    'itemTemplate'=>"<tr class=\"selectable\"><td style='width: 100px;font-weight: bold;'>{label}</td><td>{value}</td></tr>\n",
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>
    </div>
</div>
