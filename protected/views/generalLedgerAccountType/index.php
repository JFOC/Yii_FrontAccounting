<?php
/* @var $this GeneralLedgerAccountTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'General Ledger Account Types',
);

$this->menu=array(
	array('label'=>'Create GeneralLedgerAccountType', 'url'=>array('create')),
	array('label'=>'Manage GeneralLedgerAccountType', 'url'=>array('admin')),
);
?>

<h1>General Ledger Account Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
