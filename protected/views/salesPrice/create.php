<?php
/* @var $this SalesPriceController */
/* @var $model SalesPrice */

$this->breadcrumbs=array(
	'Sales Prices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalesPrice', 'url'=>array('index')),
	array('label'=>'Manage SalesPrice', 'url'=>array('admin')),
);
?>

<h1>Create SalesPrice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>