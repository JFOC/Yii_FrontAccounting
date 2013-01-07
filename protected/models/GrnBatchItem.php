<?php

/**
 * This is the model class for table "grn_batch_item".
 *
 * The followings are the available columns in table 'grn_batch_item':
 * @property integer $id
 * @property integer $grn_batch_id
 * @property integer $purchase_order_item_id
 * @property string $item_code
 * @property string $description
 * @property double $quantity_record
 * @property double $quantity_inv
 *
 * The followings are the available model relations:
 * @property GrnBatch $grnBatch
 * @property PurchaseOrderItem $purchaseOrderItem
 */
class GrnBatchItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GrnBatchItem the static model class
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
		return 'grn_batch_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('grn_batch_id, purchase_order_item_id, item_code, quantity_record, quantity_inv', 'required'),
			array('grn_batch_id, purchase_order_item_id', 'numerical', 'integerOnly'=>true),
			array('quantity_record, quantity_inv', 'numerical'),
			array('item_code', 'length', 'max'=>20),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, grn_batch_id, purchase_order_item_id, item_code, description, quantity_record, quantity_inv', 'safe', 'on'=>'search'),
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
			'grnBatch' => array(self::BELONGS_TO, 'GrnBatch', 'grn_batch_id'),
			'purchaseOrderItem' => array(self::BELONGS_TO, 'PurchaseOrderItem', 'purchase_order_item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'grn_batch_id' => 'Grn Batch',
			'purchase_order_item_id' => 'Purchase Order Item',
			'item_code' => 'Item Code',
			'description' => 'Description',
			'quantity_record' => 'Quantity Record',
			'quantity_inv' => 'Quantity Inv',
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
		$criteria->compare('grn_batch_id',$this->grn_batch_id);
		$criteria->compare('purchase_order_item_id',$this->purchase_order_item_id);
		$criteria->compare('item_code',$this->item_code,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('quantity_record',$this->quantity_record);
		$criteria->compare('quantity_inv',$this->quantity_inv);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}