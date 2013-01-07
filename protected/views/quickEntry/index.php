<?php
/* @var $this QuickEntryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Quick Entries',
);

$this->menu=array(
	array('label'=>'Create QuickEntry', 'url'=>array('create')),
	array('label'=>'Manage QuickEntry', 'url'=>array('admin')),
);
?>

<h1>Quick Entries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
