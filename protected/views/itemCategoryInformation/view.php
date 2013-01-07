<?php
/* @var $this ItemCategoryInformationController */
/* @var $model StockCategory */

$this->breadcrumbs=array(
	'Stock Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List StockCategory', 'url'=>array('index')),
	array('label'=>'Create StockCategory', 'url'=>array('create')),
	array('label'=>'Update StockCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockCategory', 'url'=>array('admin')),
);
?>

<h1>View StockCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'default_tax_type',
		'default_measure_unit_id',
		'default_mb',
		'default_sales_account_id',
		'default_cogs_account_id',
		'default_inventory_account_id',
		'default_adjustment_account_id',
		'default_assembly_account_id',
		'default_dimension1',
		'default_dimension2',
		'default_no_sale_status',
		'active_status',
	),
)); ?>
