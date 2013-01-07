<?php
/* @var $this QuickEntryLineController */
/* @var $model QuickEntryLine */

$this->breadcrumbs=array(
	'Quick Entry Lines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuickEntryLine', 'url'=>array('index')),
	array('label'=>'Manage QuickEntryLine', 'url'=>array('admin')),
);
?>

<h1>Create QuickEntryLine</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>