<?php
/* @var $this ContactCategoryController */
/* @var $model ContactCategory */

$this->breadcrumbs=array(
	'Contact Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ContactCategory', 'url'=>array('index')),
	array('label'=>'Create ContactCategory', 'url'=>array('create')),
	array('label'=>'Update ContactCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ContactCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactCategory', 'url'=>array('admin')),
);
?>

<h1>View ContactCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'contact_entity_id',
		'description',
		'system_status',
		'active_status',
	),
)); ?>
