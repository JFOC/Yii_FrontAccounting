<?php

/**
 * This is the model class for table "customer_transaction_item".
 *
 * The followings are the available columns in table 'customer_transaction_item':
 * @property integer $id
 * @property integer $customer_transaction_id
 * @property integer $stock_master_id
 * @property string $description
 * @property double $unit_price
 * @property double $unit_tax
 * @property double $quantity
 * @property double $discount_percent
 * @property double $standard_cost
 * @property double $quantity_done
 * @property integer $src_id
 *
 * The followings are the available model relations:
 * @property CustomerTransaction $customerTransaction
 * @property StockMaster $stockMaster
 */
class CustomerTransactionItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerTransactionItem the static model class
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
		return 'customer_transaction_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('unit_price, unit_tax, quantity, discount_percent, standard_cost, quantity_done, src_id', 'required'),
			array('customer_transaction_id, stock_master_id, src_id', 'numerical', 'integerOnly'=>true),
			array('unit_price, unit_tax, quantity, discount_percent, standard_cost, quantity_done', 'numerical'),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, customer_transaction_id, stock_master_id, description, unit_price, unit_tax, quantity, discount_percent, standard_cost, quantity_done, src_id', 'safe', 'on'=>'search'),
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
			'customerTransaction' => array(self::BELONGS_TO, 'CustomerTransaction', 'customer_transaction_id'),
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
			'customer_transaction_id' => 'Customer Transaction',
			'stock_master_id' => 'Stock Master',
			'description' => 'Description',
			'unit_price' => 'Unit Price',
			'unit_tax' => 'Unit Tax',
			'quantity' => 'Quantity',
			'discount_percent' => 'Discount Percent',
			'standard_cost' => 'Standard Cost',
			'quantity_done' => 'Quantity Done',
			'src_id' => 'Src',
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
		$criteria->compare('customer_transaction_id',$this->customer_transaction_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('unit_tax',$this->unit_tax);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('discount_percent',$this->discount_percent);
		$criteria->compare('standard_cost',$this->standard_cost);
		$criteria->compare('quantity_done',$this->quantity_done);
		$criteria->compare('src_id',$this->src_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}