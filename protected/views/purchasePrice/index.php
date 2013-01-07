<?php
/* @var $this PurchasePriceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Purchase Prices',
);

$this->menu=array(
	array('label'=>'Create PurchasePrice', 'url'=>array('create')),
	array('label'=>'Manage PurchasePrice', 'url'=>array('admin')),
);
?>

<h1>Purchase Prices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
