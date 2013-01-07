<?php
/* @var $this QuickEntryController */
/* @var $model QuickEntry */

$this->breadcrumbs=array(
	'Quick Entries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuickEntry', 'url'=>array('index')),
	array('label'=>'Create QuickEntry', 'url'=>array('create')),
	array('label'=>'View QuickEntry', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage QuickEntry', 'url'=>array('admin')),
);
?>

<h1>Update QuickEntry <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>