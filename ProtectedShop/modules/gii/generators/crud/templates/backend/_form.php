<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>

<div class="innerLR">

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array(
            'class'=>'form-horizontal',
        ),
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
)); ?>\n"; ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>
    <div class="widget">
        <div class="widget-head"><h4 class="heading">Validate a form with jQuery</h4></div>
        <div class="widget-body">
            <div class="row-fluid">
<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>
    <div class="control-group">
        <?php
        if($column->type==='boolean')
        {
            echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column,array('class'=>'checkbox','for'=>$column->name))."; ?>\n";
        }else{
            echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column,array('class'=>'control-label','for'=>$column->name))."; ?>\n";
        }
        ?>
        <div class="controls">
            <?php
            if($column->type==='boolean')
            {
                echo "<?php echo ".$this->generateActiveField($this->modelClass,$column,array('class'=>'checkbox'))."; ?>\n";
            }else{
                echo "<?php echo ".$this->generateActiveField($this->modelClass,$column,array('class'=>'span12'))."; ?>\n";
            }
            ?>
            <p class="error help-block">
                <?php echo "<?php echo \$form->error(\$model,'{$column->name}',array('class'=>'label label-important')); ?>\n"; ?>
            </p>
        </div>
	</div>

<?php
}
?>
            </div>
            <hr class="separator" />
            <div class="form-actions">
                <?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-icon btn-primary glyphicons circle_ok')); ?>\n"; ?>
            </div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
            </div>
        </div>
    </div>
</div><!-- form -->