<?php
/* @var $this QuickEntryController */
/* @var $model QuickEntry */

$this->breadcrumbs=array(
	'Quick Entries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List QuickEntry', 'url'=>array('index')),
	array('label'=>'Create QuickEntry', 'url'=>array('create')),
	array('label'=>'Update QuickEntry', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete QuickEntry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuickEntry', 'url'=>array('admin')),
);
?>

<h1>View QuickEntry #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'quick_entry_type_id',
		'description',
		'base_amount',
		'base_description',
		'bal_type_status',
	),
)); ?>
