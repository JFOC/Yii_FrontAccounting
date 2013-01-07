<?php
/* @var $this CustomerHeadInformationController */
/* @var $model CustomerHead */

$this->breadcrumbs=array(
	'Customer Heads'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CustomerHead', 'url'=>array('index')),
	array('label'=>'Create CustomerHead', 'url'=>array('create')),
	array('label'=>'Update CustomerHead', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CustomerHead', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerHead', 'url'=>array('admin')),
);
?>

<h1>View CustomerHead #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'reference',
		'address',
		'goods_and_services_tax',
		'currency_id',
		'sales_type_id',
		'dimension1_id',
		'dimension2_id',
		'credit_status_id',
		'payment_term_id',
		'discount',
		'payment_discount',
		'credit_limit',
		'note',
		'active_status',
	),
)); ?>
