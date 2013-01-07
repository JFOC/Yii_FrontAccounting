<?php
/* @var $this TaxTypeItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tax Type Items',
);

$this->menu=array(
	array('label'=>'Create TaxTypeItem', 'url'=>array('create')),
	array('label'=>'Manage TaxTypeItem', 'url'=>array('admin')),
);
?>

<h1>Tax Type Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
