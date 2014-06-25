<div class="form login">
<?php $form=$this->beginWidget('CActiveForm'); ?>
	<p>Vui lòng nhập password.</p>

	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>

	<?php echo CHtml::submitButton('Enter'); ?>

<?php $this->endWidget(); ?>
</div><!-- form -->
