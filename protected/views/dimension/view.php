<?php
/* @var $this DimensionController */
/* @var $model Dimension */

$this->breadcrumbs=array(
	'Dimensions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Dimension', 'url'=>array('index')),
	array('label'=>'Create Dimension', 'url'=>array('create')),
	array('label'=>'Update Dimension', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dimension', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dimension', 'url'=>array('admin')),
);
?>

<h1>View Dimension #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'reference',
		'name',
		'type_status',
		'closed_status',
		'date',
		'due_date',
	),
)); ?>
