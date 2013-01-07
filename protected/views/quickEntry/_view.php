<?php
/* @var $this QuickEntryController */
/* @var $data QuickEntry */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quick_entry_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->quick_entry_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base_amount')); ?>:</b>
	<?php echo CHtml::encode($data->base_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base_description')); ?>:</b>
	<?php echo CHtml::encode($data->base_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bal_type_status')); ?>:</b>
	<?php echo CHtml::encode($data->bal_type_status); ?>
	<br />


</div>