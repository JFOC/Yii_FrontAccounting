<?php

/**
 * This is the model class for table "purchase_order".
 *
 * The followings are the available columns in table 'purchase_order':
 * @property integer $id
 * @property integer $supplier_id
 * @property string $comment
 * @property string $date
 * @property string $reference
 * @property string $requisition_no
 * @property integer $into_stock_location_id
 * @property string $delivery_address
 * @property double $total
 * @property integer $tax_included_status
 *
 * The followings are the available model relations:
 * @property GrnBatch[] $grnBatches
 * @property Location $intoStockLocation
 * @property Supplier $supplier
 * @property PurchaseOrderItem[] $purchaseOrderItems
 */
class PurchaseOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchaseOrder the static model class
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
		return 'purchase_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('supplier_id, date, reference, into_stock_location_id, delivery_address, total, tax_included_status', 'required'),
			array('supplier_id, into_stock_location_id, tax_included_status', 'numerical', 'integerOnly'=>true),
			array('total', 'numerical'),
			array('comment, requisition_no', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, supplier_id, comment, date, reference, requisition_no, into_stock_location_id, delivery_address, total, tax_included_status', 'safe', 'on'=>'search'),
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
			'grnBatches' => array(self::HAS_MANY, 'GrnBatch', 'purchase_order_id'),
			'intoStockLocation' => array(self::BELONGS_TO, 'Location', 'into_stock_location_id'),
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
			'purchaseOrderItems' => array(self::HAS_MANY, 'PurchaseOrderItem', 'purchase_order_id'),
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
			'comment' => 'Comment',
			'date' => 'Date',
			'reference' => 'Reference',
			'requisition_no' => 'Requisition No',
			'into_stock_location_id' => 'Into Stock Location',
			'delivery_address' => 'Delivery Address',
			'total' => 'Total',
			'tax_included_status' => 'Tax Included Status',
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
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('requisition_no',$this->requisition_no,true);
		$criteria->compare('into_stock_location_id',$this->into_stock_location_id);
		$criteria->compare('delivery_address',$this->delivery_address,true);
		$criteria->compare('total',$this->total);
		$criteria->compare('tax_included_status',$this->tax_included_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}