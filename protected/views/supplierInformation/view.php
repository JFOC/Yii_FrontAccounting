<?php
/* @var $this SupplierInformationController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Supplier', 'url'=>array('index')),
	array('label'=>'Create Supplier', 'url'=>array('create')),
	array('label'=>'Update Supplier', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Supplier', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Supplier', 'url'=>array('admin')),
);
?>

<h1>View Supplier #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'reference',
		'mailing_address',
		'physical_address',
		'gst_no',
		'contact',
		'account_no',
		'website',
		'bank_account',
		'currency_id',
		'payment_term_id',
		'tax_included_status',
		'dimension1_id',
		'dimension2_id',
		'tax_group_id',
		'credit_limit',
		'purchase_account_id',
		'payable_account_id',
		'payment_discount_account_id',
		'note',
		'active_status',
	),
)); ?>
