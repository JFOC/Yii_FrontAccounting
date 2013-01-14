<?php
/* @var $this SalesQuotationController */
/* @var $model SalesOrder */

$this->breadcrumbs=array(
	'Sales Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SalesOrder', 'url'=>array('index')),
	array('label'=>'Create SalesOrder', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sales-order-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sales Orders</h1>

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
            'gridId' => 'sales-order-grid', //id of related grid
            'storage' => 'session',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search(), //model is used to get attribute labels
            'columns' => array(
				// 'id',
				// 'transaction_number',
				array(
					'name'=>'id',
					'header'=>'No',
				),
				array(
		            'name' => 'transaction_type_id',
					'filter' => CHtml::listData(TransactionType::Model()->findAll(), 'id', 'name'),
					'value'=>'$data->transactionType->name',						
					//'value' => 'TransactionType::Model()->FindByPk($data->id)->name',
				),
				
				// array\(
					// 'name'=>'\1\2\3\4\5\6id',
					// 'value'=>'$data->\1\3\5\7->name',		
				// \),
				
				'version_status',
				'type_status',
				// 'customer_master_id',		
				// 'customer_branch_id',		
				array(
					'name'=>'customer_master_id',
					'value'=>'$data->customerMaster->name',
				),
				array(
					'name'=>'customer_branch_id',
					'value'=>'$data->customerBranch->name',
				),
				
				'reference',
				'customer_reference',
				'comment',
				'order_date',
				'order_type',
				//'shipping_company_id',
				array(
					'name'=>'shipping_company_id',
					'value'=>'$data->shippingCompany->name',
				),
				array(
					'name'=>'shipping_company_id',
					'value'=>'$data->shippingCompany->name',
				),
				'delivery_address',
				'contact_phone',
				'contact_email',
				'deliver_to',
				'freight_cost',
				//'from_stock_location_id',
				array(
					'name'=>'from_stock_location_id',
					'value'=>'$data->fromStockLocation->name',
				),
				'delivery_date',				
				array(
					'name'=>'payment_term_id',
					'value'=>'$data->paymentTerm->name',
				),
				'total',
				
				array(
					'class'=>'CButtonColumn',
				),            
           ),
       )
    ));
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sales-order-grid',	
	'filter'=>$model,
	'dataProvider' =>$model->with('transactionType')->search(),
    'columns' => $dialog->columns(),
    'template' => $dialog->link()."{summary}\n{items}\n{pager}",	
)); ?>
