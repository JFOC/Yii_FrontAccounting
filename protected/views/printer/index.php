<?php
/* @var $this PrinterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Printers',
);

$this->menu=array(
	array('label'=>'Create Printer', 'url'=>array('create')),
	array('label'=>'Manage Printer', 'url'=>array('admin')),
);
?>

<h1>Printers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
