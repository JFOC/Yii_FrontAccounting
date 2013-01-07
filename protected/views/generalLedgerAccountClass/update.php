<?php
/* @var $this GeneralLedgerAccountClassController */
/* @var $model GeneralLedgerAccountClass */

$this->breadcrumbs=array(
	'General Ledger Account Classes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccountClass', 'url'=>array('index')),
	array('label'=>'Create GeneralLedgerAccountClass', 'url'=>array('create')),
	array('label'=>'View GeneralLedgerAccountClass', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GeneralLedgerAccountClass', 'url'=>array('admin')),
);
?>

<h1>Update GeneralLedgerAccountClass <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>