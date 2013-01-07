<?php
/* @var $this PurchasePriceController */
/* @var $data PurchasePrice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_master_id')); ?>:</b>
	<?php echo CHtml::encode($data->stock_master_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_measure_unit_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_measure_unit_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conversion_factor')); ?>:</b>
	<?php echo CHtml::encode($data->conversion_factor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_description')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_description); ?>
	<br />


</div>