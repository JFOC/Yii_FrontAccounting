<?php
/* @var $this ItemAccountController */
/* @var $model StockMaster */

$this->breadcrumbs=array(
	'Stock Masters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StockMaster', 'url'=>array('index')),
	array('label'=>'Create StockMaster', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('stock-master-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stock Masters</h1>

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

<?php 	$dialog = $this->widget('ext.ecolumns.EColumnsDialog', array(
       'options'=>array(
            'title' => 'Layout settings',
            'autoOpen' => false,
            'show' =>  'fade',
            'hide' =>  'fade',
        ),
       'htmlOptions' => array('style' => 'display: none'), //disable flush of dialog content
       'ecolumns' => array(
            'gridId' => 'stock-master-grid', //id of related grid
            'storage' => 'session',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search(), //model is used to get attribute labels
            'columns' => array(
				array(
					'name'=>'id',
					'header'=>'No',
				),
				

			'code',
			array(
					'name'=>'stock_category_id',
					'value'=>'$data->stockCategory->name',		
				),
			array(
					'name'=>'tax_type_item_id',
					'value'=>'$data->taxTypeItem->name',		
				),
			'description',
			'long_description',
			
			array(
					'name'=>'measure_unit_id',
					'value'=>'$data->measureUnit->name',		
				),
			array(
					'name'=>'stock_type_id',
					'value'=>'$data->stockType->name',		
				),
			array(
					'name'=>'sales_account_id',
					'value'=>'$data->salesAccount->name',		
				),
			array(
					'name'=>'cogs_account_id',
					'value'=>'$data->cogsAccount->name',		
				),
			array(
					'name'=>'inventory_account_id',
					'value'=>'$data->inventoryAccount->name',		
				),
			array(
					'name'=>'adjustment_account_id',
					'value'=>'$data->adjustmentAccount->name',		
				),
			array(
					'name'=>'assembly_account_id',
					'value'=>'$data->assemblyAccount->name',		
				),
			array(
					'name'=>'dimension1_id',
					'value'=>'$data->dimension1->name',		
				),
			array(
					'name'=>'dimension2_id',
					'value'=>'$data->dimension2->name',		
				),
			'actual_cost',
			'last_cost',
			'material_cost',
			'labour_cost',
			'overhead_cost',
			'no_sale_status',
			'editable_status',
			'active_status',
			
			
			array(
				'class'=>'CButtonColumn',
			),            
           ),
       )
    ));
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-master-grid',	
	'filter'=>$model,
	'dataProvider' =>$model->search(),
    'columns' => $dialog->columns(),
    'template' => $dialog->link()."{summary}\n{items}\n{pager}",	
	)); 
?>
