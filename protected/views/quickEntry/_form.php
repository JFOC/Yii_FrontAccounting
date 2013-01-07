<?php
/* @var $this QuickEntryController */
/* @var $model QuickEntry */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quick-entry-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'quick_entry_type_id'); ?>
		<?php echo $form->textField($model,'quick_entry_type_id'); ?>
		<?php echo $form->error($model,'quick_entry_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base_amount'); ?>
		<?php echo $form->textField($model,'base_amount'); ?>
		<?php echo $form->error($model,'base_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base_description'); ?>
		<?php echo $form->textField($model,'base_description',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'base_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bal_type_status'); ?>
		<?php echo $form->textField($model,'bal_type_status'); ?>
		<?php echo $form->error($model,'bal_type_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->