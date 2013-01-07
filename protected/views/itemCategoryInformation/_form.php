<?php
/* @var $this ItemCategoryInformationController */
/* @var $model StockCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-category-form',
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
		<?php echo $form->labelEx($model,'default_tax_type'); ?>
		<?php echo $form->textField($model,'default_tax_type'); ?>
		<?php echo $form->error($model,'default_tax_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_measure_unit_id'); ?>
		<?php echo $form->textField($model,'default_measure_unit_id'); ?>
		<?php echo $form->error($model,'default_measure_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_mb'); ?>
		<?php echo $form->textField($model,'default_mb'); ?>
		<?php echo $form->error($model,'default_mb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_sales_account_id'); ?>
		<?php echo $form->textField($model,'default_sales_account_id'); ?>
		<?php echo $form->error($model,'default_sales_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_cogs_account_id'); ?>
		<?php echo $form->textField($model,'default_cogs_account_id'); ?>
		<?php echo $form->error($model,'default_cogs_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_inventory_account_id'); ?>
		<?php echo $form->textField($model,'default_inventory_account_id'); ?>
		<?php echo $form->error($model,'default_inventory_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_adjustment_account_id'); ?>
		<?php echo $form->textField($model,'default_adjustment_account_id'); ?>
		<?php echo $form->error($model,'default_adjustment_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_assembly_account_id'); ?>
		<?php echo $form->textField($model,'default_assembly_account_id'); ?>
		<?php echo $form->error($model,'default_assembly_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_dimension1'); ?>
		<?php echo $form->textField($model,'default_dimension1'); ?>
		<?php echo $form->error($model,'default_dimension1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_dimension2'); ?>
		<?php echo $form->textField($model,'default_dimension2'); ?>
		<?php echo $form->error($model,'default_dimension2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_no_sale_status'); ?>
		<?php echo $form->textField($model,'default_no_sale_status'); ?>
		<?php echo $form->error($model,'default_no_sale_status'); ?>
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