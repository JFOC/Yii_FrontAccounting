<?php
/* @var $this BankAccountController */
/* @var $data BankAccount */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('general_ledger_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->general_ledger_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_account_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->bank_account_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_name')); ?>:</b>
	<?php echo CHtml::encode($data->account_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_number')); ?>:</b>
	<?php echo CHtml::encode($data->account_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_name')); ?>:</b>
	<?php echo CHtml::encode($data->bank_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::encode($data->currency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_currency_account_status')); ?>:</b>
	<?php echo CHtml::encode($data->default_currency_account_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_reconciled_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_reconciled_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ending_reconcile_balance')); ?>:</b>
	<?php echo CHtml::encode($data->ending_reconcile_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_status')); ?>:</b>
	<?php echo CHtml::encode($data->active_status); ?>
	<br />

	*/ ?>

</div>