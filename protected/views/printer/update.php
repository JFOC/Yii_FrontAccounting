<?php
/* @var $this PrinterController */
/* @var $model Printer */

$this->breadcrumbs=array(
	'Printers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Printer', 'url'=>array('index')),
	array('label'=>'Create Printer', 'url'=>array('create')),
	array('label'=>'View Printer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Printer', 'url'=>array('admin')),
);
?>

<h1>Update Printer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>