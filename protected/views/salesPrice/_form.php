<?php
/* @var $this SalesPriceController */
/* @var $model SalesPrice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sales-price-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_master_id'); ?>
		<?php echo $form->textField($model,'stock_master_id'); ?>
		<?php echo $form->error($model,'stock_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_type_id'); ?>
		<?php echo $form->textField($model,'sales_type_id'); ?>
		<?php echo $form->error($model,'sales_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->