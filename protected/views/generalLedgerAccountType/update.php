<?php
/* @var $this GeneralLedgerAccountTypeController */
/* @var $model GeneralLedgerAccountType */

$this->breadcrumbs=array(
	'General Ledger Account Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccountType', 'url'=>array('index')),
	array('label'=>'Create GeneralLedgerAccountType', 'url'=>array('create')),
	array('label'=>'View GeneralLedgerAccountType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GeneralLedgerAccountType', 'url'=>array('admin')),
);
?>

<h1>Update GeneralLedgerAccountType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>