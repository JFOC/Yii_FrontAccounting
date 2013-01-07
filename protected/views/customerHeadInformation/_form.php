<?php
/* @var $this CustomerHeadInformationController */
/* @var $model CustomerHead */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-head-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_and_services_tax'); ?>
		<?php echo $form->textField($model,'goods_and_services_tax',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'goods_and_services_tax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_type_id'); ?>
		<?php echo $form->textField($model,'sales_type_id'); ?>
		<?php echo $form->error($model,'sales_type_id'); ?>
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
		<?php echo $form->labelEx($model,'credit_status_id'); ?>
		<?php echo $form->textField($model,'credit_status_id'); ?>
		<?php echo $form->error($model,'credit_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
		<?php echo $form->error($model,'payment_term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount'); ?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_discount'); ?>
		<?php echo $form->textField($model,'payment_discount'); ?>
		<?php echo $form->error($model,'payment_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit_limit'); ?>
		<?php echo $form->textField($model,'credit_limit'); ?>
		<?php echo $form->error($model,'credit_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
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