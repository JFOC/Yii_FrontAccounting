<?php
/* @var $this ItemCategoryInformationController */
/* @var $model StockCategory */

$this->breadcrumbs=array(
	'Stock Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockCategory', 'url'=>array('index')),
	array('label'=>'Manage StockCategory', 'url'=>array('admin')),
);
?>

<h1>Create StockCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>