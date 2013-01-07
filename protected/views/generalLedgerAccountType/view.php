<?php
/* @var $this GeneralLedgerAccountTypeController */
/* @var $model GeneralLedgerAccountType */

$this->breadcrumbs=array(
	'General Ledger Account Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccountType', 'url'=>array('index')),
	array('label'=>'Create GeneralLedgerAccountType', 'url'=>array('create')),
	array('label'=>'Update GeneralLedgerAccountType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GeneralLedgerAccountType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GeneralLedgerAccountType', 'url'=>array('admin')),
);
?>

<h1>View GeneralLedgerAccountType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'general_ledger_account_class_id',
		'parent',
		'active_status',
	),
)); ?>
