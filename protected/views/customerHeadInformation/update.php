<?php
/* @var $this CustomerHeadInformationController */
/* @var $model CustomerHead */

$this->breadcrumbs=array(
	'Customer Heads'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerHead', 'url'=>array('index')),
	array('label'=>'Create CustomerHead', 'url'=>array('create')),
	array('label'=>'View CustomerHead', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CustomerHead', 'url'=>array('admin')),
);
?>

<h1>Update CustomerHead <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>