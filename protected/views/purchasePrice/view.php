<?php
/* @var $this PurchasePriceController */
/* @var $model PurchasePrice */

$this->breadcrumbs=array(
	'Purchase Prices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PurchasePrice', 'url'=>array('index')),
	array('label'=>'Create PurchasePrice', 'url'=>array('create')),
	array('label'=>'Update PurchasePrice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PurchasePrice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PurchasePrice', 'url'=>array('admin')),
);
?>

<h1>View PurchasePrice #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'supplier_id',
		'stock_master_id',
		'price',
		'supplier_measure_unit_id',
		'conversion_factor',
		'supplier_description',
	),
)); ?>
