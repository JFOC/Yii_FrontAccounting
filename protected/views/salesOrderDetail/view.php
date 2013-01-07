<?php
/* @var $this SalesOrderDetailController */
/* @var $model SalesOrderDetail */

$this->breadcrumbs=array(
	'Sales Order Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SalesOrderDetail', 'url'=>array('index')),
	array('label'=>'Create SalesOrderDetail', 'url'=>array('create')),
	array('label'=>'Update SalesOrderDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SalesOrderDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesOrderDetail', 'url'=>array('admin')),
);
?>

<h1>View SalesOrderDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sales_order_id',
		'stock_master_id',
		'description',
		'quantity_sent',
		'unit_price',
		'quantity',
		'discount_percent',
	),
)); ?>
