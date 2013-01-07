<?php
/* @var $this SalesPriceController */
/* @var $model SalesPrice */

$this->breadcrumbs=array(
	'Sales Prices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalesPrice', 'url'=>array('index')),
	array('label'=>'Create SalesPrice', 'url'=>array('create')),
	array('label'=>'View SalesPrice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SalesPrice', 'url'=>array('admin')),
);
?>

<h1>Update SalesPrice <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>