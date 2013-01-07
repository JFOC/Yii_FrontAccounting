<?php
/* @var $this SalesTransactionController */
/* @var $model CustomerTransaction */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-transaction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_type_id'); ?>
		<?php echo $form->textField($model,'transaction_type_id'); ?>
		<?php echo $form->error($model,'transaction_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_no'); ?>
		<?php echo $form->textField($model,'transaction_no'); ?>
		<?php echo $form->error($model,'transaction_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version_status'); ?>
		<?php echo $form->textField($model,'version_status'); ?>
		<?php echo $form->error($model,'version_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_head_id'); ?>
		<?php echo $form->textField($model,'customer_head_id'); ?>
		<?php echo $form->error($model,'customer_head_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_branch_id'); ?>
		<?php echo $form->textField($model,'customer_branch_id'); ?>
		<?php echo $form->error($model,'customer_branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'due_date'); ?>
		<?php echo $form->textField($model,'due_date'); ?>
		<?php echo $form->error($model,'due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_type_id'); ?>
		<?php echo $form->textField($model,'sales_type_id'); ?>
		<?php echo $form->error($model,'sales_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_amount'); ?>
		<?php echo $form->textField($model,'overdue_amount'); ?>
		<?php echo $form->error($model,'overdue_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_gst'); ?>
		<?php echo $form->textField($model,'overdue_gst'); ?>
		<?php echo $form->error($model,'overdue_gst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_freight'); ?>
		<?php echo $form->textField($model,'overdue_freight'); ?>
		<?php echo $form->error($model,'overdue_freight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_freight_tax'); ?>
		<?php echo $form->textField($model,'overdue_freight_tax'); ?>
		<?php echo $form->error($model,'overdue_freight_tax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_discount'); ?>
		<?php echo $form->textField($model,'overdue_discount'); ?>
		<?php echo $form->error($model,'overdue_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allocation'); ?>
		<?php echo $form->textField($model,'allocation'); ?>
		<?php echo $form->error($model,'allocation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
		<?php echo $form->error($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_company_id'); ?>
		<?php echo $form->textField($model,'shipping_company_id'); ?>
		<?php echo $form->error($model,'shipping_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimension1_id'); ?>
		<?php echo $form->textField($model,'dimension1_id'); ?>
		<?php echo $form->error($model,'dimension1_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimension2_id'); ?>
		<?php echo $form->textField($model,'dimension2_id'); ?>
		<?php echo $form->error($model,'dimension2_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
		<?php echo $form->error($model,'payment_term_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->