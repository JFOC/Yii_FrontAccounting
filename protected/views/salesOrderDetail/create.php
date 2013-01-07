<?php
/* @var $this SalesOrderDetailController */
/* @var $model SalesOrderDetail */

$this->breadcrumbs=array(
	'Sales Order Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalesOrderDetail', 'url'=>array('index')),
	array('label'=>'Manage SalesOrderDetail', 'url'=>array('admin')),
);
?>

<h1>Create SalesOrderDetail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>