<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
    <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

            <div class="row-fluid"><div class="span12">
        <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'user_id',array('class'=>'control-label','for'=>'user_id',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'user_id',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'user_id',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                            <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'user_name',array('class'=>'control-label','for'=>'user_name',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'user_name',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'user_name',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                                    <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'email',array('class'=>'control-label','for'=>'email',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'email',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'email',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                            <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'full_name',array('class'=>'control-label','for'=>'full_name',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'full_name',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'full_name',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                    </div>
</div>
<div class="row-fluid"><div class="span12">
        <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'is_management',array('class'=>'control-label','for'=>'is_management',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'is_management',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'is_management',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                            <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'is_active',array('class'=>'control-label','for'=>'is_active',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'is_active',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'is_active',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                            <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'is_ban',array('class'=>'control-label','for'=>'is_ban',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'is_ban',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'is_ban',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                            <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'is_delete',array('class'=>'control-label','for'=>'is_delete',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'is_delete',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'is_delete',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                    </div>
</div>
<div class="row-fluid"><div class="span12">
        <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'create_date',array('class'=>'control-label','for'=>'create_date',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'create_date',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'create_date',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
                            <div class="span3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'update_date',array('class'=>'control-label','for'=>'update_date',)); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'update_date',array('class'=>'span12',)); ?>
                    <p class="error help-block">
                        <?php echo $form->error($model,'update_date',array('class'=>'label label-important')); ?>
                    </p>
                </div>
            </div>
        </div>
        </div>
</div>
    
</div>
<hr class="separator" />
<?php echo CHtml::submitButton(Yii::t('backend','btn.search'),array('class'=>'btn btn-icon btn-primary float-right')); ?>
<?php $this->endWidget(); ?>
<!-- search-form -->