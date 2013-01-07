<?php
/* @var $this CustomerBranchInformationController */
/* @var $model CustomerBranch */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-branch-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_head_id'); ?>
		<?php echo $form->textField($model,'customer_head_id'); ?>
		<?php echo $form->error($model,'customer_head_id'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_id'); ?>
		<?php echo $form->textField($model,'area_id'); ?>
		<?php echo $form->error($model,'area_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_person_id'); ?>
		<?php echo $form->textField($model,'sales_person_id'); ?>
		<?php echo $form->error($model,'sales_person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_name'); ?>
		<?php echo $form->textField($model,'contact_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'contact_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_location_id'); ?>
		<?php echo $form->textField($model,'default_location_id'); ?>
		<?php echo $form->error($model,'default_location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_group_id'); ?>
		<?php echo $form->textField($model,'tax_group_id'); ?>
		<?php echo $form->error($model,'tax_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_account_id'); ?>
		<?php echo $form->textField($model,'sales_account_id'); ?>
		<?php echo $form->error($model,'sales_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_discount_account_id'); ?>
		<?php echo $form->textField($model,'sales_discount_account_id'); ?>
		<?php echo $form->error($model,'sales_discount_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receivable_account_id'); ?>
		<?php echo $form->textField($model,'receivable_account_id'); ?>
		<?php echo $form->error($model,'receivable_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_discount_account_id'); ?>
		<?php echo $form->textField($model,'payment_discount_account_id'); ?>
		<?php echo $form->error($model,'payment_discount_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_shipping_company_id'); ?>
		<?php echo $form->textField($model,'default_shipping_company_id'); ?>
		<?php echo $form->error($model,'default_shipping_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disable_transaction'); ?>
		<?php echo $form->textField($model,'disable_transaction'); ?>
		<?php echo $form->error($model,'disable_transaction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'br_post_address'); ?>
		<?php echo $form->textArea($model,'br_post_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'br_post_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_group_id'); ?>
		<?php echo $form->textField($model,'sales_group_id'); ?>
		<?php echo $form->error($model,'sales_group_id'); ?>
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