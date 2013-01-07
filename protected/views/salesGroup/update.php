<?php
/* @var $this SalesGroupController */
/* @var $model SalesGroup */

$this->breadcrumbs=array(
	'Sales Groups'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalesGroup', 'url'=>array('index')),
	array('label'=>'Create SalesGroup', 'url'=>array('create')),
	array('label'=>'View SalesGroup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SalesGroup', 'url'=>array('admin')),
);
?>

<h1>Update SalesGroup <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>