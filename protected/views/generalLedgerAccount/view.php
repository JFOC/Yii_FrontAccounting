<?php
/* @var $this GeneralLedgerAccountController */
/* @var $model GeneralLedgerAccount */

$this->breadcrumbs=array(
	'General Ledger Accounts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccount', 'url'=>array('index')),
	array('label'=>'Create GeneralLedgerAccount', 'url'=>array('create')),
	array('label'=>'Update GeneralLedgerAccount', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GeneralLedgerAccount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GeneralLedgerAccount', 'url'=>array('admin')),
);
?>

<h1>View GeneralLedgerAccount #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'code2',
		'name',
		'general_ledger_account_type_id',
		'active_status',
	),
)); ?>
