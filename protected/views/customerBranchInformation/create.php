<?php
/* @var $this CustomerBranchInformationController */
/* @var $model CustomerBranch */

$this->breadcrumbs=array(
	'Customer Branches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerBranch', 'url'=>array('index')),
	array('label'=>'Manage CustomerBranch', 'url'=>array('admin')),
);
?>

<h1>Create CustomerBranch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>