<?php
/* @var $this SalesGroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sales Groups',
);

$this->menu=array(
	array('label'=>'Create SalesGroup', 'url'=>array('create')),
	array('label'=>'Manage SalesGroup', 'url'=>array('admin')),
);
?>

<h1>Sales Groups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
