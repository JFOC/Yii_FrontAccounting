<?php

/**
 * This is the model class for table "general_ledger_account".
 *
 * The followings are the available columns in table 'general_ledger_account':
 * @property integer $id
 * @property string $code
 * @property string $code2
 * @property string $name
 * @property integer $general_ledger_account_type_id
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property BankAccount[] $bankAccounts
 * @property BudgetTransaction[] $budgetTransactions
 * @property CustomerBranch[] $customerBranches
 * @property CustomerBranch[] $customerBranches1
 * @property CustomerBranch[] $customerBranches2
 * @property CustomerBranch[] $customerBranches3
 * @property GeneralLedgerAccountType $generalLedgerAccountType
 * @property GeneralLedgerTransaction[] $generalLedgerTransactions
 * @property StockCategory[] $stockCategories
 * @property StockCategory[] $stockCategories1
 * @property StockCategory[] $stockCategories2
 * @property StockCategory[] $stockCategories3
 * @property StockCategory[] $stockCategories4
 * @property StockMaster[] $stockMasters
 * @property StockMaster[] $stockMasters1
 * @property StockMaster[] $stockMasters2
 * @property StockMaster[] $stockMasters3
 * @property StockMaster[] $stockMasters4
 * @property Supplier[] $suppliers
 * @property Supplier[] $suppliers1
 * @property Supplier[] $suppliers2
 * @property SupplierInvoiceItem[] $supplierInvoiceItems
 * @property TaxType[] $taxTypes
 * @property TaxType[] $taxTypes1
 */
class GeneralLedgerAccount extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GeneralLedgerAccount the static model class
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
		return 'general_ledger_account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, general_ledger_account_type_id, active_status', 'required'),
			array('general_ledger_account_type_id, active_status', 'numerical', 'integerOnly'=>true),
			array('code, code2', 'length', 'max'=>15),
			array('name', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, code2, name, general_ledger_account_type_id, active_status', 'safe', 'on'=>'search'),
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
			'bankAccounts' => array(self::HAS_MANY, 'BankAccount', 'general_ledger_account_id'),
			'budgetTransactions' => array(self::HAS_MANY, 'BudgetTransaction', 'general_ledger_account_id'),
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'sales_account_id'),
			'customerBranches1' => array(self::HAS_MANY, 'CustomerBranch', 'sales_discount_account_id'),
			'customerBranches2' => array(self::HAS_MANY, 'CustomerBranch', 'receivable_account_id'),
			'customerBranches3' => array(self::HAS_MANY, 'CustomerBranch', 'payment_discount_account_id'),
			'generalLedgerAccountType' => array(self::BELONGS_TO, 'GeneralLedgerAccountType', 'general_ledger_account_type_id'),
			'generalLedgerTransactions' => array(self::HAS_MANY, 'GeneralLedgerTransaction', 'general_ledger_account_id'),
			'stockCategories' => array(self::HAS_MANY, 'StockCategory', 'default_sales_account_id'),
			'stockCategories1' => array(self::HAS_MANY, 'StockCategory', 'default_cogs_account_id'),
			'stockCategories2' => array(self::HAS_MANY, 'StockCategory', 'default_inventory_account_id'),
			'stockCategories3' => array(self::HAS_MANY, 'StockCategory', 'default_adjustment_account_id'),
			'stockCategories4' => array(self::HAS_MANY, 'StockCategory', 'default_assembly_account_id'),
			'stockMasters' => array(self::HAS_MANY, 'StockMaster', 'sales_account_id'),
			'stockMasters1' => array(self::HAS_MANY, 'StockMaster', 'cogs_account_id'),
			'stockMasters2' => array(self::HAS_MANY, 'StockMaster', 'inventory_account_id'),
			'stockMasters3' => array(self::HAS_MANY, 'StockMaster', 'adjustment_account_id'),
			'stockMasters4' => array(self::HAS_MANY, 'StockMaster', 'assembly_account_id'),
			'suppliers' => array(self::HAS_MANY, 'Supplier', 'purchase_account_id'),
			'suppliers1' => array(self::HAS_MANY, 'Supplier', 'payable_account_id'),
			'suppliers2' => array(self::HAS_MANY, 'Supplier', 'payment_discount_account_id'),
			'supplierInvoiceItems' => array(self::HAS_MANY, 'SupplierInvoiceItem', 'general_ledger_account_id'),
			'taxTypes' => array(self::HAS_MANY, 'TaxType', 'sales_account_id'),
			'taxTypes1' => array(self::HAS_MANY, 'TaxType', 'purchasing_account_id'),
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
			'code2' => 'Code2',
			'name' => 'Name',
			'general_ledger_account_type_id' => 'General Ledger Account Type',
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
		$criteria->compare('code2',$this->code2,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('general_ledger_account_type_id',$this->general_ledger_account_type_id);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}