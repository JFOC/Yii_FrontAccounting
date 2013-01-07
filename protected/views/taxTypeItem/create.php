<?php
/* @var $this TaxTypeItemController */
/* @var $model TaxTypeItem */

$this->breadcrumbs=array(
	'Tax Type Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaxTypeItem', 'url'=>array('index')),
	array('label'=>'Manage TaxTypeItem', 'url'=>array('admin')),
);
?>

<h1>Create TaxTypeItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>