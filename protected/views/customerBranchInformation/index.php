<?php
/* @var $this CustomerBranchInformationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customer Branches',
);

$this->menu=array(
	array('label'=>'Create CustomerBranch', 'url'=>array('create')),
	array('label'=>'Manage CustomerBranch', 'url'=>array('admin')),
);
?>

<h1>Customer Branches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
