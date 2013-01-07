<?php
/* @var $this SalesTransactionController */
/* @var $model CustomerTransaction */

$this->breadcrumbs=array(
	'Customer Transactions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CustomerTransaction', 'url'=>array('index')),
	array('label'=>'Create CustomerTransaction', 'url'=>array('create')),
	array('label'=>'Update CustomerTransaction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CustomerTransaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerTransaction', 'url'=>array('admin')),
);
?>

<h1>View CustomerTransaction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'transaction_type_id',
		'transaction_no',
		'version_status',
		'customer_head_id',
		'customer_branch_id',
		'date',
		'due_date',
		'reference',
		'sales_type_id',
		'order',
		'overdue_amount',
		'overdue_gst',
		'overdue_freight',
		'overdue_freight_tax',
		'overdue_discount',
		'allocation',
		'rate',
		'shipping_company_id',
		'dimension1_id',
		'dimension2_id',
		'payment_term_id',
	),
)); ?>
