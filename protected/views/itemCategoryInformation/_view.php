<?php
/* @var $this ItemCategoryInformationController */
/* @var $data StockCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_tax_type')); ?>:</b>
	<?php echo CHtml::encode($data->default_tax_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_measure_unit_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_measure_unit_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_mb')); ?>:</b>
	<?php echo CHtml::encode($data->default_mb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_sales_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_sales_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_cogs_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_cogs_account_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('default_inventory_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_inventory_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_adjustment_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_adjustment_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_assembly_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_assembly_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_dimension1')); ?>:</b>
	<?php echo CHtml::encode($data->default_dimension1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_dimension2')); ?>:</b>
	<?php echo CHtml::encode($data->default_dimension2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_no_sale_status')); ?>:</b>
	<?php echo CHtml::encode($data->default_no_sale_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_status')); ?>:</b>
	<?php echo CHtml::encode($data->active_status); ?>
	<br />

	*/ ?>

</div>