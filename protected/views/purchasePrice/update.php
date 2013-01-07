<?php
/* @var $this PurchasePriceController */
/* @var $model PurchasePrice */

$this->breadcrumbs=array(
	'Purchase Prices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PurchasePrice', 'url'=>array('index')),
	array('label'=>'Create PurchasePrice', 'url'=>array('create')),
	array('label'=>'View PurchasePrice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PurchasePrice', 'url'=>array('admin')),
);
?>

<h1>Update PurchasePrice <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>