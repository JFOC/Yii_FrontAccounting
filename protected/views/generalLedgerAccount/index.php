<?php
/* @var $this GeneralLedgerAccountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'General Ledger Accounts',
);

$this->menu=array(
	array('label'=>'Create GeneralLedgerAccount', 'url'=>array('create')),
	array('label'=>'Manage GeneralLedgerAccount', 'url'=>array('admin')),
);
?>

<h1>General Ledger Accounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
