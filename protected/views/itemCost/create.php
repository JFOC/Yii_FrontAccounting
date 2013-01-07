<?php
/* @var $this ItemCostController */
/* @var $model StockMaster */

$this->breadcrumbs=array(
	'Stock Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockMaster', 'url'=>array('index')),
	array('label'=>'Manage StockMaster', 'url'=>array('admin')),
);
?>

<h1>Create StockMaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>