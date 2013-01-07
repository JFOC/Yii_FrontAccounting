<?php
/* @var $this SalesTypeController */
/* @var $model SalesType */

$this->breadcrumbs=array(
	'Sales Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalesType', 'url'=>array('index')),
	array('label'=>'Manage SalesType', 'url'=>array('admin')),
);
?>

<h1>Create SalesType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>