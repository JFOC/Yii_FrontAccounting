<?php
/* @var $this SupplierAccountController */
/* @var $model Supplier */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supplier-form',
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
		<?php echo $form->labelEx($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mailing_address'); ?>
		<?php echo $form->textArea($model,'mailing_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mailing_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'physical_address'); ?>
		<?php echo $form->textArea($model,'physical_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'physical_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gst_no'); ?>
		<?php echo $form->textField($model,'gst_no',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'gst_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_no'); ?>
		<?php echo $form->textField($model,'account_no',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'account_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_account'); ?>
		<?php echo $form->textField($model,'bank_account',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'bank_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
		<?php echo $form->error($model,'payment_term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_included_status'); ?>
		<?php echo $form->textField($model,'tax_included_status'); ?>
		<?php echo $form->error($model,'tax_included_status'); ?>
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
		<?php echo $form->labelEx($model,'tax_group_id'); ?>
		<?php echo $form->textField($model,'tax_group_id'); ?>
		<?php echo $form->error($model,'tax_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit_limit'); ?>
		<?php echo $form->textField($model,'credit_limit'); ?>
		<?php echo $form->error($model,'credit_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_account_id'); ?>
		<?php echo $form->textField($model,'purchase_account_id'); ?>
		<?php echo $form->error($model,'purchase_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payable_account_id'); ?>
		<?php echo $form->textField($model,'payable_account_id'); ?>
		<?php echo $form->error($model,'payable_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_discount_account_id'); ?>
		<?php echo $form->textField($model,'payment_discount_account_id'); ?>
		<?php echo $form->error($model,'payment_discount_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
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