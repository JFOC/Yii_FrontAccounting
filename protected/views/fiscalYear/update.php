<?php
/* @var $this FiscalYearController */
/* @var $model FiscalYear */

$this->breadcrumbs=array(
	'Fiscal Years'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FiscalYear', 'url'=>array('index')),
	array('label'=>'Create FiscalYear', 'url'=>array('create')),
	array('label'=>'View FiscalYear', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FiscalYear', 'url'=>array('admin')),
);
?>

<h1>Update FiscalYear <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>