<?php
/* @var $this CustomerHeadInformationController */
/* @var $model CustomerHead */
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
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
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
		<?php echo $form->label($model,'goods_and_services_tax'); ?>
		<?php echo $form->textField($model,'goods_and_services_tax',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_type_id'); ?>
		<?php echo $form->textField($model,'sales_type_id'); ?>
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
		<?php echo $form->label($model,'credit_status_id'); ?>
		<?php echo $form->textField($model,'credit_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discount'); ?>
		<?php echo $form->textField($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_discount'); ?>
		<?php echo $form->textField($model,'payment_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credit_limit'); ?>
		<?php echo $form->textField($model,'credit_limit'); ?>
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