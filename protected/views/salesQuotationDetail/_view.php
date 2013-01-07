<?php
/* @var $this SalesQuotationDetailController */
/* @var $data SalesOrderDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_order_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_order_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_master_id')); ?>:</b>
	<?php echo CHtml::encode($data->stock_master_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_sent')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_sent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_price')); ?>:</b>
	<?php echo CHtml::encode($data->unit_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_percent')); ?>:</b>
	<?php echo CHtml::encode($data->discount_percent); ?>
	<br />

	*/ ?>

</div>