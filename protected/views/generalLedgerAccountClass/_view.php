<?php
/* @var $this GeneralLedgerAccountClassController */
/* @var $data GeneralLedgerAccountClass */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_status')); ?>:</b>
	<?php echo CHtml::encode($data->active_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_id')); ?>:</b>
	<?php echo CHtml::encode($data->old_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_ctype_status')); ?>:</b>
	<?php echo CHtml::encode($data->old_ctype_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_abbreviation')); ?>:</b>
	<?php echo CHtml::encode($data->old_abbreviation); ?>
	<br />


</div>