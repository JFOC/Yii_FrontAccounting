<?php
/* @var $this ItemAccountController */
/* @var $model StockMaster */

$this->breadcrumbs=array(
	'Stock Masters'=>array('index'),
	$model->code,
);

$this->menu=array(
	array('label'=>'List StockMaster', 'url'=>array('index')),
	array('label'=>'Create StockMaster', 'url'=>array('create')),
	array('label'=>'Update StockMaster', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete StockMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockMaster', 'url'=>array('admin')),
);
?>

<h1>View StockMaster #<?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'stock_category_id',
		'tax_type_item_id',
		'description',
		'long_description',
		'unit_item_code',
		'mb_status',
		'sales_account_code',
		'cogs_account_code',
		'inventory_account_code',
		'adjustment_account_code',
		'assembly_account_code',
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
