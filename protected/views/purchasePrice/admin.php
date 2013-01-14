<?php
/* @var $this PurchasePriceController */
/* @var $model PurchasePrice */

$this->breadcrumbs=array(
	'Purchase Prices'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PurchasePrice', 'url'=>array('index')),
	array('label'=>'Create PurchasePrice', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('purchase-price-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Purchase Prices</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
	$dialog = $this->widget('ext.ecolumns.EColumnsDialog', array(
       'options'=>array(
            'title' => 'Layout settings',
            'autoOpen' => false,
            'show' =>  'fade',
            'hide' =>  'fade',
        ),
       'htmlOptions' => array('style' => 'display: none'), //disable flush of dialog content
       'ecolumns' => array(
            'gridId' => 'purchase-price-grid', //id of related grid
            'storage' => 'session',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search(), //model is used to get attribute labels
            'columns' => array(
				array(
					'name'=>'id',
					'header'=>'No',
				),
				
				array(
				'name'=>'supplier_id',
				'value'=>'$data->supplier->name',		
				),
				array(
				'name'=>'stock_master_id',
				'value'=>'$data->stockMaster->code',		
				),
				'price',
				array(
				'name'=>'supplier_measure_unit_id',
				'value'=>'$data->supplierMeasureUnit->name',		
				),
				'conversion_factor',
				
				'supplier_description',
		
		
				array(
					'class'=>'CButtonColumn',
				),            
           ),
       )
    ));
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'purchase-price-grid',	
	'filter'=>$model,
	'dataProvider' =>$model->search(),
    'columns' => $dialog->columns(),
    'template' => $dialog->link()."{summary}\n{items}\n{pager}",	
	)); 
?>
