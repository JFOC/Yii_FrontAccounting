<?php
/* @var $this QuickEntryLineController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Quick Entry Lines',
);

$this->menu=array(
	array('label'=>'Create QuickEntryLine', 'url'=>array('create')),
	array('label'=>'Manage QuickEntryLine', 'url'=>array('admin')),
);
?>

<h1>Quick Entry Lines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
