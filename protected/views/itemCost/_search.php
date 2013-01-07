<?php
/* @var $this ItemCostController */
/* @var $model StockMaster */
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
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_category_id'); ?>
		<?php echo $form->textField($model,'stock_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_type_item_id'); ?>
		<?php echo $form->textField($model,'tax_type_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'long_description'); ?>
		<?php echo $form->textArea($model,'long_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'measure_unit_id'); ?>
		<?php echo $form->textField($model,'measure_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_type_id'); ?>
		<?php echo $form->textField($model,'stock_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_account_id'); ?>
		<?php echo $form->textField($model,'sales_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cogs_account_id'); ?>
		<?php echo $form->textField($model,'cogs_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inventory_account_id'); ?>
		<?php echo $form->textField($model,'inventory_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adjustment_account_id'); ?>
		<?php echo $form->textField($model,'adjustment_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assembly_account_id'); ?>
		<?php echo $form->textField($model,'assembly_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimension1_id'); ?>
		<?php echo $form->textField($model,'dimension1_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimension2_id'); ?>
		<?php echo $form->textField($model,'dimension2_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actual_cost'); ?>
		<?php echo $form->textField($model,'actual_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_cost'); ?>
		<?php echo $form->textField($model,'last_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material_cost'); ?>
		<?php echo $form->textField($model,'material_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'labour_cost'); ?>
		<?php echo $form->textField($model,'labour_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overhead_cost'); ?>
		<?php echo $form->textField($model,'overhead_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sale_status'); ?>
		<?php echo $form->textField($model,'no_sale_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'editable_status'); ?>
		<?php echo $form->textField($model,'editable_status'); ?>
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