<?php
/* @var $this FormController */
/* @var $model TransactionType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaction-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_no'); ?>
		<?php echo $form->textField($model,'type_no'); ?>
		<?php echo $form->error($model,'type_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'next_reference'); ?>
		<?php echo $form->textField($model,'next_reference',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'next_reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_abbreviation'); ?>
		<?php echo $form->textField($model,'old_abbreviation',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'old_abbreviation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_code'); ?>
		<?php echo $form->textField($model,'old_code',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'old_code'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->