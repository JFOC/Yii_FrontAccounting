<?php
/* @var $this GeneralLedgerAccountClassController */
/* @var $model GeneralLedgerAccountClass */

$this->breadcrumbs=array(
	'General Ledger Account Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GeneralLedgerAccountClass', 'url'=>array('index')),
	array('label'=>'Manage GeneralLedgerAccountClass', 'url'=>array('admin')),
);
?>

<h1>Create GeneralLedgerAccountClass</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>