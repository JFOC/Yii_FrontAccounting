<?php
/* @var $this SalesQuotationDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sales Order Details',
);

$this->menu=array(
	array('label'=>'Create SalesOrderDetail', 'url'=>array('create')),
	array('label'=>'Manage SalesOrderDetail', 'url'=>array('admin')),
);
?>

<h1>Sales Order Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
