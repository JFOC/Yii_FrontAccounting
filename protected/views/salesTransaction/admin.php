<?php
/* @var $this SalesTransactionController */
/* @var $model CustomerTransaction */

$this->breadcrumbs=array(
	'Customer Transactions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CustomerTransaction', 'url'=>array('index')),
	array('label'=>'Create CustomerTransaction', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-transaction-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Customer Transactions</h1>

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
            'gridId' => 'customer-transaction-grid', //id of related grid
            'storage' => 'session',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search(), //model is used to get attribute labels
            'columns' => array(
				array(
					'name'=>'id',
					'header'=>'No',
				),
				

				array(
					'name'=>'transaction_type_id',
					'value'=>'$data->transactionType->name',		
				),
				'transaction_no',
				'version_status',
				array(
					'name'=>'customer_head_id',
					'value'=>'$data->customerHead->name',		
				),
				array(
					'name'=>'customer_branch_id',
					'value'=>'$data->customerBranch->name',		
				),
				
				'date',
				'due_date',
				'reference',
				array(
					'name'=>'sales_type_id',
					'value'=>'$data->salesType->name',		
				),
				'order',
				'overdue_amount',
				'overdue_gst',
				'overdue_freight',
				'overdue_freight_tax',
				'overdue_discount',
				'allocation',
				// 'rate',
				array(
					'name'=>'rate',
					'value'=>'$data->rate',
				),
				array(
					'name'=>'shipping_company_id',
					'value'=>'$data->shippingCompany->name',		
				),
				array(
					'name'=>'dimension1_id',
					'value'=>'$data->dimension1->name',		
				),
				array(
					'name'=>'dimension2_id',
					'value'=>'$data->dimension2->name',		
				),
				array(
					'name'=>'payment_term_id',
					'value'=>'$data->paymentTerm->name',		
				),
		
		
				array(
					'class'=>'CButtonColumn',
				),            
           ),
       )
    ));
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-transaction-grid',	
	'filter'=>$model,
	'dataProvider' =>$model->search(),
    'columns' => $dialog->columns(),
    'template' => $dialog->link()."{summary}\n{items}\n{pager}",	
	)); 
?>
