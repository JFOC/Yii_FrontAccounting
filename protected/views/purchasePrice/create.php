<?php
/* @var $this PurchasePriceController */
/* @var $model PurchasePrice */

$this->breadcrumbs=array(
	'Purchase Prices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PurchasePrice', 'url'=>array('index')),
	array('label'=>'Manage PurchasePrice', 'url'=>array('admin')),
);
?>

<h1>Create PurchasePrice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>