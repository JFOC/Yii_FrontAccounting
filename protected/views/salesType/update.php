<?php
/* @var $this SalesTypeController */
/* @var $model SalesType */

$this->breadcrumbs=array(
	'Sales Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalesType', 'url'=>array('index')),
	array('label'=>'Create SalesType', 'url'=>array('create')),
	array('label'=>'View SalesType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SalesType', 'url'=>array('admin')),
);
?>

<h1>Update SalesType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>