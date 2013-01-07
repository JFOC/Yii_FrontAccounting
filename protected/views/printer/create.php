<?php
/* @var $this PrinterController */
/* @var $model Printer */

$this->breadcrumbs=array(
	'Printers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Printer', 'url'=>array('index')),
	array('label'=>'Manage Printer', 'url'=>array('admin')),
);
?>

<h1>Create Printer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>