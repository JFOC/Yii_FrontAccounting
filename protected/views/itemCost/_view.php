<?php
/* @var $this ItemCostController */
/* @var $data StockMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->stock_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_type_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->tax_type_item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('long_description')); ?>:</b>
	<?php echo CHtml::encode($data->long_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('measure_unit_id')); ?>:</b>
	<?php echo CHtml::encode($data->measure_unit_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->stock_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cogs_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->cogs_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inventory_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->inventory_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adjustment_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->adjustment_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assembly_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->assembly_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension1_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension1_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension2_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension2_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_cost')); ?>:</b>
	<?php echo CHtml::encode($data->actual_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_cost')); ?>:</b>
	<?php echo CHtml::encode($data->last_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material_cost')); ?>:</b>
	<?php echo CHtml::encode($data->material_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('labour_cost')); ?>:</b>
	<?php echo CHtml::encode($data->labour_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overhead_cost')); ?>:</b>
	<?php echo CHtml::encode($data->overhead_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_sale_status')); ?>:</b>
	<?php echo CHtml::encode($data->no_sale_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('editable_status')); ?>:</b>
	<?php echo CHtml::encode($data->editable_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_status')); ?>:</b>
	<?php echo CHtml::encode($data->active_status); ?>
	<br />

	*/ ?>

</div>