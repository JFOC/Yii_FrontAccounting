<?php
/* @var $this FiscalYearController */
/* @var $model FiscalYear */

$this->breadcrumbs=array(
	'Fiscal Years'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FiscalYear', 'url'=>array('index')),
	array('label'=>'Create FiscalYear', 'url'=>array('create')),
	array('label'=>'Update FiscalYear', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FiscalYear', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FiscalYear', 'url'=>array('admin')),
);
?>

<h1>View FiscalYear #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'begin',
		'end',
		'closed_status',
	),
)); ?>
