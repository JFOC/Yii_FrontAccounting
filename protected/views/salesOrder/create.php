<?php
/* @var $this SalesOrderController */
/* @var $model SalesOrder */

$this->breadcrumbs=array(
	'Sales Orders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalesOrder', 'url'=>array('index')),
	array('label'=>'Manage SalesOrder', 'url'=>array('admin')),
);
?>

<h1>Create SalesOrder</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>