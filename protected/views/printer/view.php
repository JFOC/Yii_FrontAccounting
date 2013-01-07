<?php
/* @var $this PrinterController */
/* @var $model Printer */

$this->breadcrumbs=array(
	'Printers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Printer', 'url'=>array('index')),
	array('label'=>'Create Printer', 'url'=>array('create')),
	array('label'=>'Update Printer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Printer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Printer', 'url'=>array('admin')),
);
?>

<h1>View Printer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'queue',
		'host',
		'port',
		'timeout',
	),
)); ?>
