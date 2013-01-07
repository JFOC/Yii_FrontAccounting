<?php
/* @var $this QuickEntryLineController */
/* @var $model QuickEntryLine */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quick-entry-line-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'quick_entry_id'); ?>
		<?php echo $form->textField($model,'quick_entry_id'); ?>
		<?php echo $form->error($model,'quick_entry_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quick_entry_action_id'); ?>
		<?php echo $form->textField($model,'quick_entry_action_id'); ?>
		<?php echo $form->error($model,'quick_entry_action_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destination_id'); ?>
		<?php echo $form->textField($model,'destination_id',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'destination_id'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->