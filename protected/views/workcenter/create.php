<?php
/* @var $this WorkcenterController */
/* @var $model Workcenter */

$this->breadcrumbs=array(
	'Workcenters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Workcenter', 'url'=>array('index')),
	array('label'=>'Manage Workcenter', 'url'=>array('admin')),
);
?>

<h1>Create Workcenter</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>