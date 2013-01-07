<?php

/**
 * This is the model class for table "sales_order_detail".
 *
 * The followings are the available columns in table 'sales_order_detail':
 * @property integer $id
 * @property integer $sales_order_id
 * @property integer $stock_master_id
 * @property string $description
 * @property double $quantity_sent
 * @property double $unit_price
 * @property double $quantity
 * @property double $discount_percent
 *
 * The followings are the available model relations:
 * @property SalesOrder $salesOrder
 * @property StockMaster $stockMaster
 */
class SalesOrderDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesOrderDetail the static model class
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
		return 'sales_order_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sales_order_id, stock_master_id, quantity_sent, unit_price, quantity, discount_percent', 'required'),
			array('sales_order_id, stock_master_id', 'numerical', 'integerOnly'=>true),
			array('quantity_sent, unit_price, quantity, discount_percent', 'numerical'),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sales_order_id, stock_master_id, description, quantity_sent, unit_price, quantity, discount_percent', 'safe', 'on'=>'search'),
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
			'salesOrder' => array(self::BELONGS_TO, 'SalesOrder', 'sales_order_id'),
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
			'sales_order_id' => 'Sales Order',
			'stock_master_id' => 'Stock Master',
			'description' => 'Description',
			'quantity_sent' => 'Quantity Sent',
			'unit_price' => 'Unit Price',
			'quantity' => 'Quantity',
			'discount_percent' => 'Discount Percent',
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
		$criteria->compare('sales_order_id',$this->sales_order_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('quantity_sent',$this->quantity_sent);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('discount_percent',$this->discount_percent);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}