<?php
/* @var $this SalesOrderController */
/* @var $model SalesOrder */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sales-order-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_number'); ?>
		<?php echo $form->textField($model,'transaction_number'); ?>
		<?php echo $form->error($model,'transaction_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_type_id'); ?>
		<?php echo $form->textField($model,'transaction_type_id'); ?>
		<?php echo $form->error($model,'transaction_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version_status'); ?>
		<?php echo $form->textField($model,'version_status'); ?>
		<?php echo $form->error($model,'version_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_status'); ?>
		<?php echo $form->textField($model,'type_status'); ?>
		<?php echo $form->error($model,'type_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_master_id'); ?>
		<?php echo $form->textField($model,'customer_master_id'); ?>
		<?php echo $form->error($model,'customer_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_branch_id'); ?>
		<?php echo $form->textField($model,'customer_branch_id'); ?>
		<?php echo $form->error($model,'customer_branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_reference'); ?>
		<?php echo $form->textArea($model,'customer_reference',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'customer_reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_date'); ?>
		<?php echo $form->textField($model,'order_date'); ?>
		<?php echo $form->error($model,'order_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_type'); ?>
		<?php echo $form->textField($model,'order_type'); ?>
		<?php echo $form->error($model,'order_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_company_id'); ?>
		<?php echo $form->textField($model,'shipping_company_id'); ?>
		<?php echo $form->error($model,'shipping_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_address'); ?>
		<?php echo $form->textArea($model,'delivery_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'delivery_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_phone'); ?>
		<?php echo $form->textField($model,'contact_phone',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contact_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deliver_to'); ?>
		<?php echo $form->textArea($model,'deliver_to',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deliver_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'freight_cost'); ?>
		<?php echo $form->textField($model,'freight_cost'); ?>
		<?php echo $form->error($model,'freight_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_stock_location_id'); ?>
		<?php echo $form->textField($model,'from_stock_location_id'); ?>
		<?php echo $form->error($model,'from_stock_location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_date'); ?>
		<?php echo $form->textField($model,'delivery_date'); ?>
		<?php echo $form->error($model,'delivery_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
		<?php echo $form->error($model,'payment_term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->