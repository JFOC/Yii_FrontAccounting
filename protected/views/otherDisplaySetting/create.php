<?php
/* @var $this OtherDisplaySettingController */
/* @var $model User2 */

$this->breadcrumbs=array(
	'User2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User2', 'url'=>array('index')),
	array('label'=>'Manage User2', 'url'=>array('admin')),
);
?>

<h1>Create User2</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>