<?php

/**
 * This is the model class for table "purchase_order_item".
 *
 * The followings are the available columns in table 'purchase_order_item':
 * @property integer $id
 * @property integer $purchase_order_id
 * @property integer $stock_master_id
 * @property string $description
 * @property string $delivery_date
 * @property double $quantity_invoiced
 * @property double $unit_price
 * @property double $act_price
 * @property double $standard_cost_unit
 * @property double $quantity_ordered
 * @property double $quantity_received
 *
 * The followings are the available model relations:
 * @property GrnBatchItem[] $grnBatchItems
 * @property PurchaseOrder $purchaseOrder
 * @property StockMaster $stockMaster
 */
class PurchaseOrderItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchaseOrderItem the static model class
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
		return 'purchase_order_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('purchase_order_id, stock_master_id, delivery_date, quantity_invoiced, unit_price, act_price, standard_cost_unit, quantity_ordered, quantity_received', 'required'),
			array('purchase_order_id, stock_master_id', 'numerical', 'integerOnly'=>true),
			array('quantity_invoiced, unit_price, act_price, standard_cost_unit, quantity_ordered, quantity_received', 'numerical'),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, purchase_order_id, stock_master_id, description, delivery_date, quantity_invoiced, unit_price, act_price, standard_cost_unit, quantity_ordered, quantity_received', 'safe', 'on'=>'search'),
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
			'grnBatchItems' => array(self::HAS_MANY, 'GrnBatchItem', 'purchase_order_item_id'),
			'purchaseOrder' => array(self::BELONGS_TO, 'PurchaseOrder', 'purchase_order_id'),
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
			'purchase_order_id' => 'Purchase Order',
			'stock_master_id' => 'Stock Master',
			'description' => 'Description',
			'delivery_date' => 'Delivery Date',
			'quantity_invoiced' => 'Quantity Invoiced',
			'unit_price' => 'Unit Price',
			'act_price' => 'Act Price',
			'standard_cost_unit' => 'Standard Cost Unit',
			'quantity_ordered' => 'Quantity Ordered',
			'quantity_received' => 'Quantity Received',
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
		$criteria->compare('purchase_order_id',$this->purchase_order_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('quantity_invoiced',$this->quantity_invoiced);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('act_price',$this->act_price);
		$criteria->compare('standard_cost_unit',$this->standard_cost_unit);
		$criteria->compare('quantity_ordered',$this->quantity_ordered);
		$criteria->compare('quantity_received',$this->quantity_received);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}