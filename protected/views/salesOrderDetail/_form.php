<?php
/* @var $this SalesOrderDetailController */
/* @var $model SalesOrderDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sales-order-detail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_order_id'); ?>
		<?php echo $form->textField($model,'sales_order_id'); ?>
		<?php echo $form->error($model,'sales_order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_master_id'); ?>
		<?php echo $form->textField($model,'stock_master_id'); ?>
		<?php echo $form->error($model,'stock_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity_sent'); ?>
		<?php echo $form->textField($model,'quantity_sent'); ?>
		<?php echo $form->error($model,'quantity_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_price'); ?>
		<?php echo $form->textField($model,'unit_price'); ?>
		<?php echo $form->error($model,'unit_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount_percent'); ?>
		<?php echo $form->textField($model,'discount_percent'); ?>
		<?php echo $form->error($model,'discount_percent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->