<?php
/* @var $this QuickEntryLineController */
/* @var $data QuickEntryLine */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quick_entry_id')); ?>:</b>
	<?php echo CHtml::encode($data->quick_entry_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quick_entry_action_id')); ?>:</b>
	<?php echo CHtml::encode($data->quick_entry_action_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destination_id')); ?>:</b>
	<?php echo CHtml::encode($data->destination_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension1_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension1_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension2_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension2_id); ?>
	<br />


</div>