<?php
/* @var $this QuickEntryLineController */
/* @var $model QuickEntryLine */

$this->breadcrumbs=array(
	'Quick Entry Lines'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List QuickEntryLine', 'url'=>array('index')),
	array('label'=>'Create QuickEntryLine', 'url'=>array('create')),
	array('label'=>'Update QuickEntryLine', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete QuickEntryLine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuickEntryLine', 'url'=>array('admin')),
);
?>

<h1>View QuickEntryLine #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'quick_entry_id',
		'amount',
		'quick_entry_action_id',
		'destination_id',
		'dimension1_id',
		'dimension2_id',
	),
)); ?>
