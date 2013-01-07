<?php
/* @var $this CustomerHeadInformationController */
/* @var $model CustomerHead */

$this->breadcrumbs=array(
	'Customer Heads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerHead', 'url'=>array('index')),
	array('label'=>'Manage CustomerHead', 'url'=>array('admin')),
);
?>

<h1>Create CustomerHead</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>