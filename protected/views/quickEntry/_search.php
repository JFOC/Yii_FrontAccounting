<?php
/* @var $this QuickEntryController */
/* @var $model QuickEntry */
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
		<?php echo $form->label($model,'quick_entry_type_id'); ?>
		<?php echo $form->textField($model,'quick_entry_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base_amount'); ?>
		<?php echo $form->textField($model,'base_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base_description'); ?>
		<?php echo $form->textField($model,'base_description',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bal_type_status'); ?>
		<?php echo $form->textField($model,'bal_type_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->