<?php
/* @var $this ItemCategoryInformationController */
/* @var $model StockCategory */
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_tax_type'); ?>
		<?php echo $form->textField($model,'default_tax_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_measure_unit_id'); ?>
		<?php echo $form->textField($model,'default_measure_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_mb'); ?>
		<?php echo $form->textField($model,'default_mb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_sales_account_id'); ?>
		<?php echo $form->textField($model,'default_sales_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_cogs_account_id'); ?>
		<?php echo $form->textField($model,'default_cogs_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_inventory_account_id'); ?>
		<?php echo $form->textField($model,'default_inventory_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_adjustment_account_id'); ?>
		<?php echo $form->textField($model,'default_adjustment_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_assembly_account_id'); ?>
		<?php echo $form->textField($model,'default_assembly_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_dimension1'); ?>
		<?php echo $form->textField($model,'default_dimension1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_dimension2'); ?>
		<?php echo $form->textField($model,'default_dimension2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_no_sale_status'); ?>
		<?php echo $form->textField($model,'default_no_sale_status'); ?>
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