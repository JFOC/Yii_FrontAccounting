<?php
/* @var $this SalesTransactionController */
/* @var $model CustomerTransaction */
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
		<?php echo $form->label($model,'transaction_type_id'); ?>
		<?php echo $form->textField($model,'transaction_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_no'); ?>
		<?php echo $form->textField($model,'transaction_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'version_status'); ?>
		<?php echo $form->textField($model,'version_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_head_id'); ?>
		<?php echo $form->textField($model,'customer_head_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_branch_id'); ?>
		<?php echo $form->textField($model,'customer_branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'due_date'); ?>
		<?php echo $form->textField($model,'due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_type_id'); ?>
		<?php echo $form->textField($model,'sales_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overdue_amount'); ?>
		<?php echo $form->textField($model,'overdue_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overdue_gst'); ?>
		<?php echo $form->textField($model,'overdue_gst'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overdue_freight'); ?>
		<?php echo $form->textField($model,'overdue_freight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overdue_freight_tax'); ?>
		<?php echo $form->textField($model,'overdue_freight_tax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overdue_discount'); ?>
		<?php echo $form->textField($model,'overdue_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allocation'); ?>
		<?php echo $form->textField($model,'allocation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_company_id'); ?>
		<?php echo $form->textField($model,'shipping_company_id'); ?>
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
		<?php echo $form->label($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->