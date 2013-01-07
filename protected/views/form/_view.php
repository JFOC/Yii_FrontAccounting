<?php
/* @var $this FormController */
/* @var $data TransactionType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_no')); ?>:</b>
	<?php echo CHtml::encode($data->type_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('next_reference')); ?>:</b>
	<?php echo CHtml::encode($data->next_reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_abbreviation')); ?>:</b>
	<?php echo CHtml::encode($data->old_abbreviation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_code')); ?>:</b>
	<?php echo CHtml::encode($data->old_code); ?>
	<br />


</div>