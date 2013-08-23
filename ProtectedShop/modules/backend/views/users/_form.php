<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="innerLR">
    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <div class="widget">
        <div class="widget-head"><h4 class="heading">Validate a form with jQuery</h4></div>
        <div class="widget-body">
            <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array(
            'class'=>'form-horizontal',
        ),
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
)); ?>
            <?php echo $form->errorSummary($model); ?>
            <div class="row-fluid">
                <div class="span6">
                    <div class="control-group">
                        <?php echo $form->labelEx($model,'user_name',array('class'=>'control-label','for'=>'user_name',)); ?>
                        <div class="controls">
                            <?php echo $form->textField($model,'user_name',array('class'=>'span12',)); ?>
                            <p class="error help-block">
                                <?php echo $form->error($model,'user_name',array('class'=>'label label-important')); ?>
                            </p>
                        </div>
                    </div>
                                                        <div class="control-group">
                        <?php echo $form->labelEx($model,'password',array('class'=>'control-label','for'=>'password',)); ?>
                        <div class="controls">
                            <?php echo $form->passwordField($model,'password',array('class'=>'span12',)); ?>
                            <p class="error help-block">
                                <?php echo $form->error($model,'password',array('class'=>'label label-important')); ?>
                            </p>
                        </div>
                    </div>
                                                        <div class="control-group">
                        <?php echo $form->labelEx($model,'email',array('class'=>'control-label','for'=>'email',)); ?>
                        <div class="controls">
                            <?php echo $form->textField($model,'email',array('class'=>'span12',)); ?>
                            <p class="error help-block">
                                <?php echo $form->error($model,'email',array('class'=>'label label-important')); ?>
                            </p>
                        </div>
                    </div>
                                                        <div class="control-group">
                        <?php echo $form->labelEx($model,'full_name',array('class'=>'control-label','for'=>'full_name',)); ?>
                        <div class="controls">
                            <?php echo $form->textField($model,'full_name',array('class'=>'span12',)); ?>
                            <p class="error help-block">
                                <?php echo $form->error($model,'full_name',array('class'=>'label label-important')); ?>
                            </p>
                        </div>
                    </div>
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
                <div class="span6">
                    <div class="control-group">
                        <?php echo $form->labelEx($model,'is_active',array('class'=>'control-label','for'=>'is_active',)); ?>
                        <div class="controls">
                            <?php echo $form->textField($model,'is_active',array('class'=>'span12',)); ?>
                            <p class="error help-block">
                                <?php echo $form->error($model,'is_active',array('class'=>'label label-important')); ?>
                            </p>
                        </div>
                    </div>
                                                        <div class="control-group">
                        <?php echo $form->labelEx($model,'is_ban',array('class'=>'control-label','for'=>'is_ban',)); ?>
                        <div class="controls">
                            <?php echo $form->textField($model,'is_ban',array('class'=>'span12',)); ?>
                            <p class="error help-block">
                                <?php echo $form->error($model,'is_ban',array('class'=>'label label-important')); ?>
                            </p>
                        </div>
                    </div>
                                                        <div class="control-group">
                        <?php echo $form->labelEx($model,'is_delete',array('class'=>'control-label','for'=>'is_delete',)); ?>
                        <div class="controls">
                            <?php echo $form->textField($model,'is_delete',array('class'=>'span12',)); ?>
                            <p class="error help-block">
                                <?php echo $form->error($model,'is_delete',array('class'=>'label label-important')); ?>
                            </p>
                        </div>
                    </div>
                                                        <div class="control-group">
                        <?php echo $form->labelEx($model,'create_date',array('class'=>'control-label','for'=>'create_date',)); ?>
                        <div class="controls">
                            <?php echo $form->textField($model,'create_date',array('class'=>'span12',)); ?>
                            <p class="error help-block">
                                <?php echo $form->error($model,'create_date',array('class'=>'label label-important')); ?>
                            </p>
                        </div>
                    </div>
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
            <hr class="separator" />
            <div class="form-actions">
                <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('backend','btn.create') : Yii::t('backend','btn.save') ,array('class'=>'btn btn-icon btn-primary float-right')); ?>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
<!-- form -->