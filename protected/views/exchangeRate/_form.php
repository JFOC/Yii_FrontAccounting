<?php
/* @var $this ExchangeRateController */
/* @var $model ExchangeRate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'exchange-rate-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_buy'); ?>
		<?php echo $form->textField($model,'rate_buy'); ?>
		<?php echo $form->error($model,'rate_buy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_sell'); ?>
		<?php echo $form->textField($model,'rate_sell'); ?>
		<?php echo $form->error($model,'rate_sell'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->