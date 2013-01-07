<?php
/* @var $this CustomerBranchInformationController */
/* @var $model CustomerBranch */

$this->breadcrumbs=array(
	'Customer Branches'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerBranch', 'url'=>array('index')),
	array('label'=>'Create CustomerBranch', 'url'=>array('create')),
	array('label'=>'View CustomerBranch', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CustomerBranch', 'url'=>array('admin')),
);
?>

<h1>Update CustomerBranch <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>