<?php

/**
 * This is the model class for table "stock_master".
 *
 * The followings are the available columns in table 'stock_master':
 * @property integer $id
 * @property string $code
 * @property integer $stock_category_id
 * @property integer $tax_type_item_id
 * @property string $description
 * @property string $long_description
 * @property integer $measure_unit_id
 * @property integer $stock_type_id
 * @property integer $sales_account_id
 * @property integer $cogs_account_id
 * @property integer $inventory_account_id
 * @property integer $adjustment_account_id
 * @property integer $assembly_account_id
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property double $actual_cost
 * @property double $last_cost
 * @property double $material_cost
 * @property double $labour_cost
 * @property double $overhead_cost
 * @property integer $no_sale_status
 * @property integer $editable_status
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property BillOfMaterial[] $billOfMaterials
 * @property CustomerTransactionItem[] $customerTransactionItems
 * @property PurchaseOrderItem[] $purchaseOrderItems
 * @property PurchasePrice[] $purchasePrices
 * @property SalesOrderDetail[] $salesOrderDetails
 * @property SalesPrice[] $salesPrices
 * @property StockItem[] $stockItems
 * @property StockLocation[] $stockLocations
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property GeneralLedgerAccount $salesAccount
 * @property GeneralLedgerAccount $cogsAccount
 * @property GeneralLedgerAccount $inventoryAccount
 * @property GeneralLedgerAccount $adjustmentAccount
 * @property GeneralLedgerAccount $assemblyAccount
 * @property MeasureUnit $measureUnit
 * @property StockCategory $stockCategory
 * @property StockType $stockType
 * @property TaxTypeItem $taxTypeItem
 * @property StockMove[] $stockMoves
 * @property SupplierInvoiceItem[] $supplierInvoiceItems
 * @property Workorder[] $workorders
 * @property WorkorderIssueItem[] $workorderIssueItems
 * @property WorkorderRequirement[] $workorderRequirements
 */
class StockMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stock_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, stock_category_id, tax_type_item_id, description, long_description, measure_unit_id, stock_type_id, sales_account_id, cogs_account_id, inventory_account_id, adjustment_account_id, assembly_account_id, actual_cost, last_cost, material_cost, labour_cost, overhead_cost, no_sale_status, editable_status, active_status', 'required'),
			array('stock_category_id, tax_type_item_id, measure_unit_id, stock_type_id, sales_account_id, cogs_account_id, inventory_account_id, adjustment_account_id, assembly_account_id, dimension1_id, dimension2_id, no_sale_status, editable_status, active_status', 'numerical', 'integerOnly'=>true),
			array('actual_cost, last_cost, material_cost, labour_cost, overhead_cost', 'numerical'),
			array('code', 'length', 'max'=>20),
			array('description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, stock_category_id, tax_type_item_id, description, long_description, measure_unit_id, stock_type_id, sales_account_id, cogs_account_id, inventory_account_id, adjustment_account_id, assembly_account_id, dimension1_id, dimension2_id, actual_cost, last_cost, material_cost, labour_cost, overhead_cost, no_sale_status, editable_status, active_status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'billOfMaterials' => array(self::HAS_MANY, 'BillOfMaterial', 'component'),
			'customerTransactionItems' => array(self::HAS_MANY, 'CustomerTransactionItem', 'stock_master_id'),
			'purchaseOrderItems' => array(self::HAS_MANY, 'PurchaseOrderItem', 'stock_master_id'),
			'purchasePrices' => array(self::HAS_MANY, 'PurchasePrice', 'stock_master_id'),
			'salesOrderDetails' => array(self::HAS_MANY, 'SalesOrderDetail', 'stock_master_id'),
			'salesPrices' => array(self::HAS_MANY, 'SalesPrice', 'stock_master_id'),
			'stockItems' => array(self::HAS_MANY, 'StockItem', 'stock_master_id'),
			'stockLocations' => array(self::HAS_MANY, 'StockLocation', 'stock_master_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'salesAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'sales_account_id'),
			'cogsAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'cogs_account_id'),
			'inventoryAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'inventory_account_id'),
			'adjustmentAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'adjustment_account_id'),
			'assemblyAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'assembly_account_id'),
			'measureUnit' => array(self::BELONGS_TO, 'MeasureUnit', 'measure_unit_id'),
			'stockCategory' => array(self::BELONGS_TO, 'StockCategory', 'stock_category_id'),
			'stockType' => array(self::BELONGS_TO, 'StockType', 'stock_type_id'),
			'taxTypeItem' => array(self::BELONGS_TO, 'TaxTypeItem', 'tax_type_item_id'),
			'stockMoves' => array(self::HAS_MANY, 'StockMove', 'stock_master_id'),
			'supplierInvoiceItems' => array(self::HAS_MANY, 'SupplierInvoiceItem', 'stock_master_id'),
			'workorders' => array(self::HAS_MANY, 'Workorder', 'stock_master_id'),
			'workorderIssueItems' => array(self::HAS_MANY, 'WorkorderIssueItem', 'stock_master_id'),
			'workorderRequirements' => array(self::HAS_MANY, 'WorkorderRequirement', 'stock_master_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'stock_category_id' => 'Stock Category',
			'tax_type_item_id' => 'Tax Type Item',
			'description' => 'Description',
			'long_description' => 'Long Description',
			'measure_unit_id' => 'Measure Unit',
			'stock_type_id' => 'Stock Type',
			'sales_account_id' => 'Sales Account',
			'cogs_account_id' => 'Cogs Account',
			'inventory_account_id' => 'Inventory Account',
			'adjustment_account_id' => 'Adjustment Account',
			'assembly_account_id' => 'Assembly Account',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'actual_cost' => 'Actual Cost',
			'last_cost' => 'Last Cost',
			'material_cost' => 'Material Cost',
			'labour_cost' => 'Labour Cost',
			'overhead_cost' => 'Overhead Cost',
			'no_sale_status' => 'No Sale Status',
			'editable_status' => 'Editable Status',
			'active_status' => 'Active Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('stock_category_id',$this->stock_category_id);
		$criteria->compare('tax_type_item_id',$this->tax_type_item_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('long_description',$this->long_description,true);
		$criteria->compare('measure_unit_id',$this->measure_unit_id);
		$criteria->compare('stock_type_id',$this->stock_type_id);
		$criteria->compare('sales_account_id',$this->sales_account_id);
		$criteria->compare('cogs_account_id',$this->cogs_account_id);
		$criteria->compare('inventory_account_id',$this->inventory_account_id);
		$criteria->compare('adjustment_account_id',$this->adjustment_account_id);
		$criteria->compare('assembly_account_id',$this->assembly_account_id);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('actual_cost',$this->actual_cost);
		$criteria->compare('last_cost',$this->last_cost);
		$criteria->compare('material_cost',$this->material_cost);
		$criteria->compare('labour_cost',$this->labour_cost);
		$criteria->compare('overhead_cost',$this->overhead_cost);
		$criteria->compare('no_sale_status',$this->no_sale_status);
		$criteria->compare('editable_status',$this->editable_status);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}