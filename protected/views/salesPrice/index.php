<?php
/* @var $this SalesPriceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sales Prices',
);

$this->menu=array(
	array('label'=>'Create SalesPrice', 'url'=>array('create')),
	array('label'=>'Manage SalesPrice', 'url'=>array('admin')),
);
?>

<h1>Sales Prices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
