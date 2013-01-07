<?php
/* @var $this SalesTransactionController */
/* @var $data CustomerTransaction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_no')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version_status')); ?>:</b>
	<?php echo CHtml::encode($data->version_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_head_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_head_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('due_date')); ?>:</b>
	<?php echo CHtml::encode($data->due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference')); ?>:</b>
	<?php echo CHtml::encode($data->reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_amount')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_gst')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_gst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_freight')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_freight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_freight_tax')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_freight_tax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_discount')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allocation')); ?>:</b>
	<?php echo CHtml::encode($data->allocation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_company_id')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension1_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension1_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension2_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension2_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_term_id')); ?>:</b>
	<?php echo CHtml::encode($data->payment_term_id); ?>
	<br />

	*/ ?>

</div>