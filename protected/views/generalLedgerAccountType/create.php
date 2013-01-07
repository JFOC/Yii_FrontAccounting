<?php
/* @var $this GeneralLedgerAccountTypeController */
/* @var $model GeneralLedgerAccountType */

$this->breadcrumbs=array(
	'General Ledger Account Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccountType', 'url'=>array('index')),
	array('label'=>'Manage GeneralLedgerAccountType', 'url'=>array('admin')),
);
?>

<h1>Create GeneralLedgerAccountType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>