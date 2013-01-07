<?php
/* @var $this CustomerBranchAccountController */
/* @var $model CustomerBranch */

$this->breadcrumbs=array(
	'Customer Branches'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CustomerBranch', 'url'=>array('index')),
	array('label'=>'Create CustomerBranch', 'url'=>array('create')),
	array('label'=>'Update CustomerBranch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CustomerBranch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerBranch', 'url'=>array('admin')),
);
?>

<h1>View CustomerBranch #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_head_id',
		'name',
		'reference',
		'address',
		'area_id',
		'sales_person_id',
		'contact_name',
		'default_location_id',
		'tax_group_id',
		'sales_account_id',
		'sales_discount_account_id',
		'receivable_account_id',
		'payment_discount_account_id',
		'default_shipping_company_id',
		'disable_transaction',
		'br_post_address',
		'sales_group_id',
		'note',
		'active_status',
	),
)); ?>
