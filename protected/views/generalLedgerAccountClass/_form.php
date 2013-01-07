<?php
/* @var $this GeneralLedgerAccountClassController */
/* @var $model GeneralLedgerAccountClass */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'general-ledger-account-class-form',
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
		<?php echo $form->labelEx($model,'active_status'); ?>
		<?php echo $form->textField($model,'active_status'); ?>
		<?php echo $form->error($model,'active_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_id'); ?>
		<?php echo $form->textField($model,'old_id'); ?>
		<?php echo $form->error($model,'old_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_ctype_status'); ?>
		<?php echo $form->textField($model,'old_ctype_status'); ?>
		<?php echo $form->error($model,'old_ctype_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_abbreviation'); ?>
		<?php echo $form->textField($model,'old_abbreviation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'old_abbreviation'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->