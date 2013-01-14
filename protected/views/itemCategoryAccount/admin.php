<?php
/* @var $this ItemCategoryAccountController */
/* @var $model StockCategory */

$this->breadcrumbs=array(
	'Stock Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StockCategory', 'url'=>array('index')),
	array('label'=>'Create StockCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('stock-category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stock Categories</h1>

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
            'gridId' => 'stock-category-grid', //id of related grid
            'storage' => 'session',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search(), //model is used to get attribute labels
            'columns' => array(
				array(
					'name'=>'id',
					'header'=>'No',
				),
				

				'name',
				'default_tax_type',
				array(
					'name'=>'munit',
					'value'=>'$data->defaultMeasureUnit->name',		
				),
				array(
					'name'=>'munit',
					'value'=>'$data->defaultMeasureUnit->name',		
				),
					
				'default_mb',
				array(
				'name'=>'default_sales_account_id',
				'value'=>'$data->defaultSalesAccount->name',		
				),
				
				array(
				'name'=>'default_cogs_account_id',
				'value'=>'$data->defaultCogsAccount->name',		
				),
				array(
				'name'=>'default_inventory_account_id',
				'value'=>'$data->defaultInventoryAccount->name',		
				),
				array(
				'name'=>'default_adjustment_account_id',
				'value'=>'$data->defaultAdjustmentAccount->name',		
				),
				array(
				'name'=>'default_assembly_account_id',
				'value'=>'$data->defaultAssemblyAccount->name',		
				),
				'default_dimension1',
				'default_dimension2',
				'default_no_sale_status',
				'active_status',
		
		
				array(
					'class'=>'CButtonColumn',
				),            
           ),
       )
    ));
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-category-grid',	
	'dataProvider'=>$model->with('defaultMeasureUnit')->search(),	
	'filter'=>$model,
	// 'dataProvider' =>$model->search(),
    'columns' => $dialog->columns(),
    'template' => $dialog->link()."{summary}\n{items}\n{pager}",	
	)); 
	
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-category-grid',	
	'filter'=>$model,
	'dataProvider' =>$model->search(),
    'columns' => $dialog->columns(),
    'template' => $dialog->link()."{summary}\n{items}\n{pager}",	
	)); 
?>

<?php
 // $this->widget('zii.widgets.grid.CGridView', array(
	// 'id'=>'stock-category-grid',
	// 'dataProvider'=>$model->with('unit')->search(),
	// 'filter'=>$model,
	// 'columns'=>array(
				// array(
					// 'name'=>'id',
					// 'header'=>'No',
				// ),			

				// 'name',
				// 'default_tax_type',
				// array(
					// 'name'=>'default_measure_unit_id',
					// 'value'=>'$data->defaultMeasureUnit->name',		
				// ),
		// array(
			// 'class'=>'CButtonColumn',
                        // 'template'=>'{update} {delete}',
		// ),
	// ),
// ));
 ?>
