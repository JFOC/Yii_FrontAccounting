<?php
/* @var $this SalesGroupController */
/* @var $model SalesGroup */

$this->breadcrumbs=array(
	'Sales Groups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SalesGroup', 'url'=>array('index')),
	array('label'=>'Create SalesGroup', 'url'=>array('create')),
	array('label'=>'Update SalesGroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SalesGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesGroup', 'url'=>array('admin')),
);
?>

<h1>View SalesGroup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'active_status',
	),
)); ?>
