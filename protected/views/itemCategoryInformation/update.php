<?php
/* @var $this ItemCategoryInformationController */
/* @var $model StockCategory */

$this->breadcrumbs=array(
	'Stock Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockCategory', 'url'=>array('index')),
	array('label'=>'Create StockCategory', 'url'=>array('create')),
	array('label'=>'View StockCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockCategory', 'url'=>array('admin')),
);
?>

<h1>Update StockCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>