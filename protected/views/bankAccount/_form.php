<?php
/* @var $this BankAccountController */
/* @var $model BankAccount */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bank-account-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'general_ledger_account_id'); ?>
		<?php echo $form->textField($model,'general_ledger_account_id'); ?>
		<?php echo $form->error($model,'general_ledger_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_account_type_id'); ?>
		<?php echo $form->textField($model,'bank_account_type_id'); ?>
		<?php echo $form->error($model,'bank_account_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_name'); ?>
		<?php echo $form->textField($model,'account_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'account_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_currency_account_status'); ?>
		<?php echo $form->textField($model,'default_currency_account_status'); ?>
		<?php echo $form->error($model,'default_currency_account_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_reconciled_date'); ?>
		<?php echo $form->textField($model,'last_reconciled_date'); ?>
		<?php echo $form->error($model,'last_reconciled_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ending_reconcile_balance'); ?>
		<?php echo $form->textField($model,'ending_reconcile_balance'); ?>
		<?php echo $form->error($model,'ending_reconcile_balance'); ?>
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