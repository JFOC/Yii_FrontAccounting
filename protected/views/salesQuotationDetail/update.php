<?php
/* @var $this SalesQuotationDetailController */
/* @var $model SalesOrderDetail */

$this->breadcrumbs=array(
	'Sales Order Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalesOrderDetail', 'url'=>array('index')),
	array('label'=>'Create SalesOrderDetail', 'url'=>array('create')),
	array('label'=>'View SalesOrderDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SalesOrderDetail', 'url'=>array('admin')),
);
?>

<h1>Update SalesOrderDetail <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>