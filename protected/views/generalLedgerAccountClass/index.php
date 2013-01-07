<?php
/* @var $this GeneralLedgerAccountClassController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'General Ledger Account Classes',
);

$this->menu=array(
	array('label'=>'Create GeneralLedgerAccountClass', 'url'=>array('create')),
	array('label'=>'Manage GeneralLedgerAccountClass', 'url'=>array('admin')),
);
?>

<h1>General Ledger Account Classes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
