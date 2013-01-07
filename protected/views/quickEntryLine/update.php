<?php
/* @var $this QuickEntryLineController */
/* @var $model QuickEntryLine */

$this->breadcrumbs=array(
	'Quick Entry Lines'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuickEntryLine', 'url'=>array('index')),
	array('label'=>'Create QuickEntryLine', 'url'=>array('create')),
	array('label'=>'View QuickEntryLine', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage QuickEntryLine', 'url'=>array('admin')),
);
?>

<h1>Update QuickEntryLine <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>