<?php
/* @var $this BankAccountController */
/* @var $model BankAccount */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'general_ledger_account_id'); ?>
		<?php echo $form->textField($model,'general_ledger_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_account_type_id'); ?>
		<?php echo $form->textField($model,'bank_account_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_name'); ?>
		<?php echo $form->textField($model,'account_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_currency_account_status'); ?>
		<?php echo $form->textField($model,'default_currency_account_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_reconciled_date'); ?>
		<?php echo $form->textField($model,'last_reconciled_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ending_reconcile_balance'); ?>
		<?php echo $form->textField($model,'ending_reconcile_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active_status'); ?>
		<?php echo $form->textField($model,'active_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->