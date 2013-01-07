<?php
/* @var $this PurchasePriceController */
/* @var $model PurchasePrice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-price-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
		<?php echo $form->error($model,'supplier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_master_id'); ?>
		<?php echo $form->textField($model,'stock_master_id'); ?>
		<?php echo $form->error($model,'stock_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_measure_unit_id'); ?>
		<?php echo $form->textField($model,'supplier_measure_unit_id'); ?>
		<?php echo $form->error($model,'supplier_measure_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conversion_factor'); ?>
		<?php echo $form->textField($model,'conversion_factor'); ?>
		<?php echo $form->error($model,'conversion_factor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_description'); ?>
		<?php echo $form->textField($model,'supplier_description',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'supplier_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->