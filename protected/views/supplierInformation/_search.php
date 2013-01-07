<?php
/* @var $this SupplierInformationController */
/* @var $model Supplier */
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
		<?php echo $form->label($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mailing_address'); ?>
		<?php echo $form->textArea($model,'mailing_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'physical_address'); ?>
		<?php echo $form->textArea($model,'physical_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gst_no'); ?>
		<?php echo $form->textField($model,'gst_no',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_no'); ?>
		<?php echo $form->textField($model,'account_no',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_account'); ?>
		<?php echo $form->textField($model,'bank_account',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_included_status'); ?>
		<?php echo $form->textField($model,'tax_included_status'); ?>
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
		<?php echo $form->label($model,'tax_group_id'); ?>
		<?php echo $form->textField($model,'tax_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credit_limit'); ?>
		<?php echo $form->textField($model,'credit_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchase_account_id'); ?>
		<?php echo $form->textField($model,'purchase_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payable_account_id'); ?>
		<?php echo $form->textField($model,'payable_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_discount_account_id'); ?>
		<?php echo $form->textField($model,'payment_discount_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
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