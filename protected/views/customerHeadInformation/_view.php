<?php
/* @var $this CustomerHeadInformationController */
/* @var $data CustomerHead */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_and_services_tax')); ?>:</b>
	<?php echo CHtml::encode($data->goods_and_services_tax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::encode($data->currency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_type_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension1_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension1_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension2_id')); ?>:</b>
	<?php echo CHtml::encode($data->dimension2_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->credit_status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_term_id')); ?>:</b>
	<?php echo CHtml::encode($data->payment_term_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_discount')); ?>:</b>
	<?php echo CHtml::encode($data->payment_discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_limit')); ?>:</b>
	<?php echo CHtml::encode($data->credit_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_status')); ?>:</b>
	<?php echo CHtml::encode($data->active_status); ?>
	<br />

	*/ ?>

</div>