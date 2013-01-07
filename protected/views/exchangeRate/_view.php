<?php
/* @var $this ExchangeRateController */
/* @var $data ExchangeRate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::encode($data->currency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_buy')); ?>:</b>
	<?php echo CHtml::encode($data->rate_buy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_sell')); ?>:</b>
	<?php echo CHtml::encode($data->rate_sell); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>