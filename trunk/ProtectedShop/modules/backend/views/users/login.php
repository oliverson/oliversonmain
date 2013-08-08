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
    <form class="form-signin" method="post" action="index.html?lang=en">
        <h3 class="glyphicons unlock form-signin-heading"><i></i> Sign in</h3>
        <div class="uniformjs">
            <input type="text" class="input-block-level" placeholder="Email address">
            <input type="password" class="input-block-level" placeholder="Password">
            <label class="checkbox"><input type="checkbox" value="remember-me">Remember me</label>
        </div>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
    </form>
</div>
<div id="login">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
    <h3 class="glyphicons unlock form-signin-heading"><i></i> <?php Yii::t('vi','login.page_title') ?></h3>
    <div class="uniformjs">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username',array('class'=>'input-block-level','placeholder'=>Yii::t('vi','login.page_title'))); ?>
        <?php echo $form->error($model,'username'); ?>

        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>
        <p class="hint">
            Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
        </p>

        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
        <?php echo $form->error($model,'rememberMe'); ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>

    <?php $this->endWidget(); ?>
    </div>
</div><!-- form -->