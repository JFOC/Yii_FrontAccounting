<?php
/* @var $this FiscalYearController */
/* @var $model FiscalYear */

$this->breadcrumbs=array(
	'Fiscal Years'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FiscalYear', 'url'=>array('index')),
	array('label'=>'Manage FiscalYear', 'url'=>array('admin')),
);
?>

<h1>Create FiscalYear</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>