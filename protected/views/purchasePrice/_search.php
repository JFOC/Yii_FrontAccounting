<?php
/* @var $this PurchasePriceController */
/* @var $model PurchasePrice */
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
		<?php echo $form->label($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_master_id'); ?>
		<?php echo $form->textField($model,'stock_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_measure_unit_id'); ?>
		<?php echo $form->textField($model,'supplier_measure_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conversion_factor'); ?>
		<?php echo $form->textField($model,'conversion_factor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_description'); ?>
		<?php echo $form->textField($model,'supplier_description',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->