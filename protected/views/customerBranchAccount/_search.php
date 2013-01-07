<?php
/* @var $this CustomerBranchAccountController */
/* @var $model CustomerBranch */
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
		<?php echo $form->label($model,'customer_head_id'); ?>
		<?php echo $form->textField($model,'customer_head_id'); ?>
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
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_id'); ?>
		<?php echo $form->textField($model,'area_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_person_id'); ?>
		<?php echo $form->textField($model,'sales_person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_name'); ?>
		<?php echo $form->textField($model,'contact_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_location_id'); ?>
		<?php echo $form->textField($model,'default_location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_group_id'); ?>
		<?php echo $form->textField($model,'tax_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_account_id'); ?>
		<?php echo $form->textField($model,'sales_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_discount_account_id'); ?>
		<?php echo $form->textField($model,'sales_discount_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receivable_account_id'); ?>
		<?php echo $form->textField($model,'receivable_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_discount_account_id'); ?>
		<?php echo $form->textField($model,'payment_discount_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_shipping_company_id'); ?>
		<?php echo $form->textField($model,'default_shipping_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disable_transaction'); ?>
		<?php echo $form->textField($model,'disable_transaction'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'br_post_address'); ?>
		<?php echo $form->textArea($model,'br_post_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_group_id'); ?>
		<?php echo $form->textField($model,'sales_group_id'); ?>
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