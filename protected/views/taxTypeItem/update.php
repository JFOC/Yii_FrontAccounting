<?php
/* @var $this TaxTypeItemController */
/* @var $model TaxTypeItem */

$this->breadcrumbs=array(
	'Tax Type Items'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaxTypeItem', 'url'=>array('index')),
	array('label'=>'Create TaxTypeItem', 'url'=>array('create')),
	array('label'=>'View TaxTypeItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaxTypeItem', 'url'=>array('admin')),
);
?>

<h1>Update TaxTypeItem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>