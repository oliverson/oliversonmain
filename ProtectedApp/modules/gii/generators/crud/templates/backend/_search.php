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

<div class="row-fluid">
    <?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl(\$this->route),
	'method'=>'get',
)); ?>\n"; ?>

    <?php
    $count_column=0;
    foreach($this->tableSchema->columns as $column)
    {
        $field=$this->generateInputField($this->modelClass,$column);
        if(strpos($field,'password')!==false)
            continue;
        $count_column++;
    }
    $count_column_input=0;
    foreach($this->tableSchema->columns as $column): ?>
        <?php
        $field=$this->generateInputField($this->modelClass,$column);
        if(strpos($field,'password')!==false)
            continue;
        $mode_column=$count_column_input%4;
        if($mode_column==0 && $count_column_input!=0 && $count_column_input!=$count_column)
            echo '</div>'."\n".'</div>'."\n";
        if($mode_column==0 || $count_column_input==0){
            echo '<div class="row-fluid"><div class="span12">'."\n";
        }
        ?>
        <div class="span3">
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
        </div>
        <?php
        $count_column_input++;
        if($count_column_input==$count_column)
            echo '</div>'."\n".'</div>'."\n";
        ?>
    <?php endforeach; ?>

</div>
<hr class="separator" />
<?php echo "<?php echo CHtml::submitButton(Yii::t('backend','btn.search'),array('class'=>'btn btn-icon btn-primary float-right')); ?>\n"; ?>
<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
<!-- search-form -->