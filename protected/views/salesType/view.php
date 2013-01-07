<?php
/* @var $this SalesTypeController */
/* @var $model SalesType */

$this->breadcrumbs=array(
	'Sales Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SalesType', 'url'=>array('index')),
	array('label'=>'Create SalesType', 'url'=>array('create')),
	array('label'=>'Update SalesType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SalesType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesType', 'url'=>array('admin')),
);
?>

<h1>View SalesType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'tax_included_status',
		'factor',
		'active_status',
	),
)); ?>
