<?php
/* @var $this CustomerHeadInformationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customer Heads',
);

$this->menu=array(
	array('label'=>'Create CustomerHead', 'url'=>array('create')),
	array('label'=>'Manage CustomerHead', 'url'=>array('admin')),
);
?>

<h1>Customer Heads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
