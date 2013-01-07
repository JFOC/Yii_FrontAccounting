<?php
/* @var $this TaxTypeController */
/* @var $model TaxType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tax-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
		<?php echo $form->error($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_account_id'); ?>
		<?php echo $form->textField($model,'sales_account_id'); ?>
		<?php echo $form->error($model,'sales_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchasing_account_id'); ?>
		<?php echo $form->textField($model,'purchasing_account_id'); ?>
		<?php echo $form->error($model,'purchasing_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active_status'); ?>
		<?php echo $form->textField($model,'active_status'); ?>
		<?php echo $form->error($model,'active_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->