<?php

/**
 * This is the model class for table "grn_batch".
 *
 * The followings are the available columns in table 'grn_batch':
 * @property integer $id
 * @property integer $supplier_id
 * @property integer $purchase_order_id
 * @property string $reference
 * @property string $delivery_date
 * @property integer $location_id
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property PurchaseOrder $purchaseOrder
 * @property Supplier $supplier
 * @property GrnBatchItem[] $grnBatchItems
 */
class GrnBatch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GrnBatch the static model class
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
		return 'grn_batch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('supplier_id, purchase_order_id, reference, delivery_date, location_id', 'required'),
			array('supplier_id, purchase_order_id, location_id', 'numerical', 'integerOnly'=>true),
			array('reference', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, supplier_id, purchase_order_id, reference, delivery_date, location_id', 'safe', 'on'=>'search'),
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
			'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
			'purchaseOrder' => array(self::BELONGS_TO, 'PurchaseOrder', 'purchase_order_id'),
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
			'grnBatchItems' => array(self::HAS_MANY, 'GrnBatchItem', 'grn_batch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'supplier_id' => 'Supplier',
			'purchase_order_id' => 'Purchase Order',
			'reference' => 'Reference',
			'delivery_date' => 'Delivery Date',
			'location_id' => 'Location',
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
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('purchase_order_id',$this->purchase_order_id);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('location_id',$this->location_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}