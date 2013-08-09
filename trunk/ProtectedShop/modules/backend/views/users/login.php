<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/5/13
 * Time: 3:55 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<script>
    function loginBlock(block){

        $(".loginBlock:visible").animate({
            top: '200px',
            opacity: 0
        },'200','linear',function(){
            $(this).css('top','0px').css('display','none');
        });
        $(block).css({opacity: 0, display: 'block',top: '0px'});
        $(block).find('.checker').show();
        $(block).animate({opacity: 1, top: '100px'},'200');
    }
</script>
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
    <h3 class="glyphicons unlock form-signin-heading"><i></i> <?php echo Yii::t('backend','login.page_title') ?></h3>
    <div class="uniformjs">
        <?php echo $form->textField($model,'username',array('class'=>'input-block-level','placeholder'=>Yii::t('backend','login.username'))); ?>
        <?php echo $form->error($model,'username',array('class'=>'error help-block label label-important margin-bot10')); ?>

        <?php echo $form->passwordField($model,'password',array('class'=>'input-block-level','placeholder'=>Yii::t('backend','login.password'))); ?>
        <?php echo $form->error($model,'password',array('class'=>'label label-important')); ?>
        <div class="checkbox-login">
            <?php echo $form->checkBox($model,'rememberMe'); ?>
            <?php echo Yii::t('backend','login.rememberMe');?>
            <?php echo $form->error($model,'rememberMe',array('class'=>'label label-important')); ?>
        </div>

    </div>
    <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-large btn-primary')); ?>
    <?php $this->endWidget(); ?>
</div><!-- form -->