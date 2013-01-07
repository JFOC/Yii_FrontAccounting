<?php
/* @var $this QuickEntryController */
/* @var $model QuickEntry */

$this->breadcrumbs=array(
	'Quick Entries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuickEntry', 'url'=>array('index')),
	array('label'=>'Manage QuickEntry', 'url'=>array('admin')),
);
?>

<h1>Create QuickEntry</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>