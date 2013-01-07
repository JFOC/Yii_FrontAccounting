<?php
/* @var $this GeneralLedgerAccountController */
/* @var $model GeneralLedgerAccount */

$this->breadcrumbs=array(
	'General Ledger Accounts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccount', 'url'=>array('index')),
	array('label'=>'Create GeneralLedgerAccount', 'url'=>array('create')),
	array('label'=>'View GeneralLedgerAccount', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GeneralLedgerAccount', 'url'=>array('admin')),
);
?>

<h1>Update GeneralLedgerAccount <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>