<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="innerLR">

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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <div class="widget">
        <div class="widget-head"><h4 class="heading">Validate a form with jQuery</h4></div>
        <div class="widget-body">
            <div class="row-fluid">
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
        <?php echo $form->labelEx($model,'login_type',array('class'=>'control-label','for'=>'login_type',)); ?>
        <div class="controls">
            <?php echo $form->textField($model,'login_type',array('class'=>'span12',)); ?>
            <p class="error help-block">
                <?php echo $form->error($model,'login_type',array('class'=>'label label-important')); ?>
            </p>
        </div>
	</div>

            </div>
            <hr class="separator" />
            <div class="form-actions">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-icon btn-primary glyphicons circle_ok')); ?>
            </div>

<?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div><!-- form -->