<?php
/* @var $this SalesQuotationController */
/* @var $data SalesOrder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_number')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version_status')); ?>:</b>
	<?php echo CHtml::encode($data->version_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_status')); ?>:</b>
	<?php echo CHtml::encode($data->type_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_master_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_master_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_branch_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('reference')); ?>:</b>
	<?php echo CHtml::encode($data->reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_reference')); ?>:</b>
	<?php echo CHtml::encode($data->customer_reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_date')); ?>:</b>
	<?php echo CHtml::encode($data->order_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_type')); ?>:</b>
	<?php echo CHtml::encode($data->order_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_company_id')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_address')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_phone')); ?>:</b>
	<?php echo CHtml::encode($data->contact_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_email')); ?>:</b>
	<?php echo CHtml::encode($data->contact_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deliver_to')); ?>:</b>
	<?php echo CHtml::encode($data->deliver_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('freight_cost')); ?>:</b>
	<?php echo CHtml::encode($data->freight_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_stock_location_id')); ?>:</b>
	<?php echo CHtml::encode($data->from_stock_location_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_date')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_term_id')); ?>:</b>
	<?php echo CHtml::encode($data->payment_term_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	*/ ?>

</div>