<?php
/* @var $this ItemAccountController */
/* @var $model StockMaster */

$this->breadcrumbs=array(
	'Stock Masters'=>array('index'),
	$model->code=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockMaster', 'url'=>array('index')),
	array('label'=>'Create StockMaster', 'url'=>array('create')),
	array('label'=>'View StockMaster', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage StockMaster', 'url'=>array('admin')),
);
?>

<h1>Update StockMaster <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>