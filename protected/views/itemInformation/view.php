<?php
/* @var $this ItemInformationController */
/* @var $model StockMaster */

$this->breadcrumbs=array(
	'Stock Masters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StockMaster', 'url'=>array('index')),
	array('label'=>'Create StockMaster', 'url'=>array('create')),
	array('label'=>'Update StockMaster', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockMaster', 'url'=>array('admin')),
);
?>

<h1>View StockMaster #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'stock_category_id',
		'tax_type_item_id',
		'description',
		'long_description',
		'measure_unit_id',
		'stock_type_id',
		'sales_account_id',
		'cogs_account_id',
		'inventory_account_id',
		'adjustment_account_id',
		'assembly_account_id',
		'dimension1_id',
		'dimension2_id',
		'actual_cost',
		'last_cost',
		'material_cost',
		'labour_cost',
		'overhead_cost',
		'no_sale_status',
		'editable_status',
		'active_status',
	),
)); ?>
