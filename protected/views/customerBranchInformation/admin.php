<?php
/* @var $this CustomerBranchInformationController */
/* @var $model CustomerBranch */

$this->breadcrumbs=array(
	'Customer Branches'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CustomerBranch', 'url'=>array('index')),
	array('label'=>'Create CustomerBranch', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-branch-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Customer Branches</h1>

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
            'gridId' => 'customer-branch-grid', //id of related grid
            'storage' => 'session',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search(), //model is used to get attribute labels
            'columns' => array(
				array(
					'name'=>'id',
					'header'=>'No',
				),			
				
				array(
					'name'=>'customer_head_id',
					'value'=>'$data->customerHead->name',		
				),
				'name',
				'reference',
				'address',
				array(
					'name'=>'area_id',
					'value'=>'$data->area->name',		
				),
				
				array(
					'name'=>'sales_person_id',
					'value'=>'$data->salesPerson->name',		
				),
				'contact_name',
				array(
					'name'=>'default_location_id',
					'value'=>'$data->defaultLocation->name',		
				),
				array(
					'name'=>'tax_group_id',
					'value'=>'$data->taxGroup->name',		
				),
				array(
					'name'=>'sales_account_id',
					'value'=>'$data->salesAccount!=null  ? $data->salesAccount->name : null ',
				),
				array(
					'name'=>'sales_discount_account_id',
					'value'=>'$data->salesDiscountAccount->name',		
				),
				array(
					'name'=>'receivable_account_id',
					'value'=>'$data->receivableAccount->name',		
				),
				array(
					'name'=>'payment_discount_account_id',
					'value'=>'$data->paymentDiscountAccount->name',		
				),
				array(
					'name'=>'default_shipping_company_id',
					'value'=>'$data->defaultShippingCompany->name',		
				),
				'disable_transaction',
				'br_post_address',
				array(
					'name'=>'sales_group_id',
					'value'=>'$data->salesGroup->description',		
				),
				'note',
				'active_status',
		
		
				array(
					'class'=>'CButtonColumn',
				),            
           ),
       )
    ));
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-branch-grid',	
	'filter'=>$model,
	'dataProvider' =>$model->search(),
    'columns' => $dialog->columns(),
    'template' => $dialog->link()."{summary}\n{items}\n{pager}",	
	)); 
?>
