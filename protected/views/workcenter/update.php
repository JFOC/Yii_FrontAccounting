<?php
/* @var $this WorkcenterController */
/* @var $model Workcenter */

$this->breadcrumbs=array(
	'Workcenters'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Workcenter', 'url'=>array('index')),
	array('label'=>'Create Workcenter', 'url'=>array('create')),
	array('label'=>'View Workcenter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Workcenter', 'url'=>array('admin')),
);
?>

<h1>Update Workcenter <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>