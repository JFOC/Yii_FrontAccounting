<?php
/* @var $this GeneralLedgerAccountController */
/* @var $model GeneralLedgerAccount */

$this->breadcrumbs=array(
	'General Ledger Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccount', 'url'=>array('index')),
	array('label'=>'Manage GeneralLedgerAccount', 'url'=>array('admin')),
);
?>

<h1>Create GeneralLedgerAccount</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>