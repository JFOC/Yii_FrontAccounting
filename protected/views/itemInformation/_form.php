<?php
/* @var $this ItemInformationController */
/* @var $model StockMaster */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-master-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_category_id'); ?>
		<?php echo $form->textField($model,'stock_category_id'); ?>
		<?php echo $form->error($model,'stock_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_type_item_id'); ?>
		<?php echo $form->textField($model,'tax_type_item_id'); ?>
		<?php echo $form->error($model,'tax_type_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'long_description'); ?>
		<?php echo $form->textArea($model,'long_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'long_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'measure_unit_id'); ?>
		<?php echo $form->textField($model,'measure_unit_id'); ?>
		<?php echo $form->error($model,'measure_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_type_id'); ?>
		<?php echo $form->textField($model,'stock_type_id'); ?>
		<?php echo $form->error($model,'stock_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_account_id'); ?>
		<?php echo $form->textField($model,'sales_account_id'); ?>
		<?php echo $form->error($model,'sales_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cogs_account_id'); ?>
		<?php echo $form->textField($model,'cogs_account_id'); ?>
		<?php echo $form->error($model,'cogs_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inventory_account_id'); ?>
		<?php echo $form->textField($model,'inventory_account_id'); ?>
		<?php echo $form->error($model,'inventory_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adjustment_account_id'); ?>
		<?php echo $form->textField($model,'adjustment_account_id'); ?>
		<?php echo $form->error($model,'adjustment_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assembly_account_id'); ?>
		<?php echo $form->textField($model,'assembly_account_id'); ?>
		<?php echo $form->error($model,'assembly_account_id'); ?>
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
		<?php echo $form->labelEx($model,'actual_cost'); ?>
		<?php echo $form->textField($model,'actual_cost'); ?>
		<?php echo $form->error($model,'actual_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_cost'); ?>
		<?php echo $form->textField($model,'last_cost'); ?>
		<?php echo $form->error($model,'last_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material_cost'); ?>
		<?php echo $form->textField($model,'material_cost'); ?>
		<?php echo $form->error($model,'material_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'labour_cost'); ?>
		<?php echo $form->textField($model,'labour_cost'); ?>
		<?php echo $form->error($model,'labour_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overhead_cost'); ?>
		<?php echo $form->textField($model,'overhead_cost'); ?>
		<?php echo $form->error($model,'overhead_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_sale_status'); ?>
		<?php echo $form->textField($model,'no_sale_status'); ?>
		<?php echo $form->error($model,'no_sale_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'editable_status'); ?>
		<?php echo $form->textField($model,'editable_status'); ?>
		<?php echo $form->error($model,'editable_status'); ?>
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