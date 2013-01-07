<?php
/* @var $this GeneralLedgerAccountClassController */
/* @var $model GeneralLedgerAccountClass */
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
		<?php echo $form->label($model,'active_status'); ?>
		<?php echo $form->textField($model,'active_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'old_id'); ?>
		<?php echo $form->textField($model,'old_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'old_ctype_status'); ?>
		<?php echo $form->textField($model,'old_ctype_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'old_abbreviation'); ?>
		<?php echo $form->textField($model,'old_abbreviation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->