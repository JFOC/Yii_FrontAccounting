<?php
/* @var $this SalesGroupController */
/* @var $model SalesGroup */

$this->breadcrumbs=array(
	'Sales Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalesGroup', 'url'=>array('index')),
	array('label'=>'Manage SalesGroup', 'url'=>array('admin')),
);
?>

<h1>Create SalesGroup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>