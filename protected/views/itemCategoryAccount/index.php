<?php
/* @var $this ItemCategoryAccountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Categories',
);

$this->menu=array(
	array('label'=>'Create StockCategory', 'url'=>array('create')),
	array('label'=>'Manage StockCategory', 'url'=>array('admin')),
);
?>

<h1>Stock Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
