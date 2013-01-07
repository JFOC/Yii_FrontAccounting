<?php
/* @var $this GeneralLedgerAccountClassController */
/* @var $model GeneralLedgerAccountClass */

$this->breadcrumbs=array(
	'General Ledger Account Classes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccountClass', 'url'=>array('index')),
	array('label'=>'Create GeneralLedgerAccountClass', 'url'=>array('create')),
	array('label'=>'Update GeneralLedgerAccountClass', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GeneralLedgerAccountClass', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GeneralLedgerAccountClass', 'url'=>array('admin')),
);
?>

<h1>View GeneralLedgerAccountClass #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'active_status',
		'old_id',
		'old_ctype_status',
		'old_abbreviation',
	),
)); ?>
