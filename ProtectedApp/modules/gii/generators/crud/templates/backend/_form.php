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
    <div class="widget">
        <div class="widget-head"><h4 class="heading"><?php echo "<?php echo \$title;?>" ?></h4></div>
        <div class="widget-body">
            <?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array(
            'class'=>'form-horizontal',
        ),
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
)); ?>\n"; ?>
            <?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>
            <div class="row-fluid">
                <?php
                $count_column=0;
                foreach($this->tableSchema->columns as $column)
                {
                    if($column->autoIncrement)
                        continue;
                    $count_column++;
                }
                $count_column_input=0;
                foreach($this->tableSchema->columns as $column)
                {
                    if($column->autoIncrement)
                        continue;
                    $count_column_input++;
                    $mode_column=$count_column/2;
                    if($mode_column+1==$count_column_input || $count_column_input==1){
                        echo '<div class="span6">'."\n";
                    }
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
                    if($mode_column==$count_column_input || $count_column_input==$count_column){
                        echo '</div>'."\n";
                    }
                    ?>
                <?php
                }
                ?>
            </div>
            <hr class="separator" />
            <div class="form-actions">
                <?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? Yii::t('backend','btn.create') : Yii::t('backend','btn.save') ,array('class'=>'btn btn-icon btn-primary float-right')); ?>\n"; ?>
            </div>
            <?php echo "<?php \$this->endWidget(); ?>\n"; ?>
        </div>
    </div>
</div>
<!-- form -->