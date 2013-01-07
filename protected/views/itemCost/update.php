<?php
/* @var $this ItemCostController */
/* @var $model StockMaster */

$this->breadcrumbs=array(
	'Stock Masters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockMaster', 'url'=>array('index')),
	array('label'=>'Create StockMaster', 'url'=>array('create')),
	array('label'=>'View StockMaster', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockMaster', 'url'=>array('admin')),
);
?>

<h1>Update StockMaster <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>