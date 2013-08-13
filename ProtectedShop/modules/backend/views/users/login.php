<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/5/13
 * Time: 3:55 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<div id="login">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'htmlOptions'=>array(
            'class'=>'form-signin',
        ),
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
    <h3 class="glyphicons parents form-signin-heading"><i></i> <?php echo Yii::t('backend','login.page_title') ?></h3>
    <?php echo $form->error($model,'error_check',array('class'=>'alert alert-error')); ?>
    <div class="uniformjs">
        <div class="control-group">
            <div class="input-prepend">
                <span class="add-on"><span class="icon-user"></span></span>
                <?php echo $form->textField($model,'username',array('class'=>'input-block-level','placeholder'=>Yii::t('backend','login.username'))); ?>
            </div>
            <?php echo $form->error($model,'username',array('class'=>'error help-block label label-important margin-bot10')); ?>
        </div>
        <div class="control-group">
            <div class="input-prepend">
                <span class="add-on"><span class="icon-lock"></span></span>
                <?php echo $form->passwordField($model,'password',array('class'=>'input-block-level','placeholder'=>Yii::t('backend','login.password'))); ?>
            </div>
            <?php echo $form->error($model,'password',array('class'=>'label label-important')); ?>
            <div class="checkbox-login">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo Yii::t('backend','login.rememberMe');?>
                <a href="#" style="margin-left: 20px;"><?php echo Yii::t('backend','lnk.forgot.password') ?></a>
                <?php echo $form->error($model,'rememberMe',array('class'=>'label label-important')); ?>
            </div>
        </div>
    </div>
    <?php echo CHtml::submitButton(Yii::t('backend','btn.login'),array('class'=>'btn  btn-primary')); ?>

    <?php $this->endWidget(); ?>
</div><!-- form -->