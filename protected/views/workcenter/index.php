<?php
/* @var $this WorkcenterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Workcenters',
);

$this->menu=array(
	array('label'=>'Create Workcenter', 'url'=>array('create')),
	array('label'=>'Manage Workcenter', 'url'=>array('admin')),
);
?>

<h1>Workcenters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
