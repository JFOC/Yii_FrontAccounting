<?php
/* @var $this SupplierAccountController */
/* @var $data Supplier */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference')); ?>:</b>
	<?php echo CHtml::encode($data->reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physical_address')); ?>:</b>
	<?php echo CHtml::encode($data->physical_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gst_no')); ?>:</b>
	<?php echo CHtml::encode($data->gst_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('account_no')); ?>:</b>
	<?php echo CHtml::encode($data->account_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_account')); ?>:</b>
	<?php echo CHtml::encode($data->bank_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::encode($data->currency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_term_id')); ?>:</b>
	<?php echo CHtml::encode($data->payment_term_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_included_status')); ?>:</b>
	<?php echo CHtml::encode($data->tax_included_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension1_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension1_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension2_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension2_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_group_id')); ?>:</b>
	<?php echo CHtml::encode($data->tax_group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_limit')); ?>:</b>
	<?php echo CHtml::encode($data->credit_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payable_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->payable_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_discount_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->payment_discount_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_status')); ?>:</b>
	<?php echo CHtml::encode($data->active_status); ?>
	<br />

	*/ ?>

</div>