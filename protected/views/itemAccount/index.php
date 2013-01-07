<?php
/* @var $this ItemAccountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Masters',
);

$this->menu=array(
	array('label'=>'Create StockMaster', 'url'=>array('create')),
	array('label'=>'Manage StockMaster', 'url'=>array('admin')),
);
?>

<h1>Stock Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
