<?php
/* @var $this TaxTypeItemController */
/* @var $model TaxTypeItem */

$this->breadcrumbs=array(
	'Tax Type Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TaxTypeItem', 'url'=>array('index')),
	array('label'=>'Create TaxTypeItem', 'url'=>array('create')),
	array('label'=>'Update TaxTypeItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaxTypeItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaxTypeItem', 'url'=>array('admin')),
);
?>

<h1>View TaxTypeItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'exemption_status',
		'active_status',
	),
)); ?>
