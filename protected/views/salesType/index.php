<?php
/* @var $this SalesTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sales Types',
);

$this->menu=array(
	array('label'=>'Create SalesType', 'url'=>array('create')),
	array('label'=>'Manage SalesType', 'url'=>array('admin')),
);
?>

<h1>Sales Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
