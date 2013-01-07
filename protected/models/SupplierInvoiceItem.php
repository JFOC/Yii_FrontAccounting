<?php

/**
 * This is the model class for table "supplier_invoice_item".
 *
 * The followings are the available columns in table 'supplier_invoice_item':
 * @property integer $id
 * @property integer $supplier_transaction_id
 * @property integer $supplier_transaction_type
 * @property integer $general_ledger_account_id
 * @property integer $grn_item_id
 * @property integer $purchase_order_detail_item_id
 * @property integer $stock_master_id
 * @property string $description
 * @property double $quantity
 * @property double $unit_price
 * @property double $unit_tax
 * @property string $memo
 *
 * The followings are the available model relations:
 * @property GeneralLedgerAccount $generalLedgerAccount
 * @property StockMaster $stockMaster
 */
class SupplierInvoiceItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SupplierInvoiceItem the static model class
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
		return 'supplier_invoice_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quantity, unit_price, unit_tax', 'required'),
			array('supplier_transaction_id, supplier_transaction_type, general_ledger_account_id, grn_item_id, purchase_order_detail_item_id, stock_master_id', 'numerical', 'integerOnly'=>true),
			array('quantity, unit_price, unit_tax', 'numerical'),
			array('description, memo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, supplier_transaction_id, supplier_transaction_type, general_ledger_account_id, grn_item_id, purchase_order_detail_item_id, stock_master_id, description, quantity, unit_price, unit_tax, memo', 'safe', 'on'=>'search'),
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
			'generalLedgerAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'general_ledger_account_id'),
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'supplier_transaction_id' => 'Supplier Transaction',
			'supplier_transaction_type' => 'Supplier Transaction Type',
			'general_ledger_account_id' => 'General Ledger Account',
			'grn_item_id' => 'Grn Item',
			'purchase_order_detail_item_id' => 'Purchase Order Detail Item',
			'stock_master_id' => 'Stock Master',
			'description' => 'Description',
			'quantity' => 'Quantity',
			'unit_price' => 'Unit Price',
			'unit_tax' => 'Unit Tax',
			'memo' => 'Memo',
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
		$criteria->compare('supplier_transaction_id',$this->supplier_transaction_id);
		$criteria->compare('supplier_transaction_type',$this->supplier_transaction_type);
		$criteria->compare('general_ledger_account_id',$this->general_ledger_account_id);
		$criteria->compare('grn_item_id',$this->grn_item_id);
		$criteria->compare('purchase_order_detail_item_id',$this->purchase_order_detail_item_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('unit_tax',$this->unit_tax);
		$criteria->compare('memo',$this->memo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}