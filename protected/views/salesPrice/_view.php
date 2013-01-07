<?php
/* @var $this SalesPriceController */
/* @var $data SalesPrice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_master_id')); ?>:</b>
	<?php echo CHtml::encode($data->stock_master_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::encode($data->currency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />


</div>