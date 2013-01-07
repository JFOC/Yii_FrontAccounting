<?php

/**
 * This is the model class for table "purchase_price".
 *
 * The followings are the available columns in table 'purchase_price':
 * @property integer $id
 * @property integer $supplier_id
 * @property integer $stock_master_id
 * @property double $price
 * @property integer $supplier_measure_unit_id
 * @property double $conversion_factor
 * @property string $supplier_description
 *
 * The followings are the available model relations:
 * @property MeasureUnit $supplierMeasureUnit
 * @property StockMaster $stockMaster
 * @property Supplier $supplier
 */
class PurchasePrice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchasePrice the static model class
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
		return 'purchase_price';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('supplier_id, stock_master_id, price, supplier_measure_unit_id, conversion_factor, supplier_description', 'required'),
			array('supplier_id, stock_master_id, supplier_measure_unit_id', 'numerical', 'integerOnly'=>true),
			array('price, conversion_factor', 'numerical'),
			array('supplier_description', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, supplier_id, stock_master_id, price, supplier_measure_unit_id, conversion_factor, supplier_description', 'safe', 'on'=>'search'),
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
			'supplierMeasureUnit' => array(self::BELONGS_TO, 'MeasureUnit', 'supplier_measure_unit_id'),
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
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
			'stock_master_id' => 'Stock Master',
			'price' => 'Price',
			'supplier_measure_unit_id' => 'Supplier Measure Unit',
			'conversion_factor' => 'Conversion Factor',
			'supplier_description' => 'Supplier Description',
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
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('supplier_measure_unit_id',$this->supplier_measure_unit_id);
		$criteria->compare('conversion_factor',$this->conversion_factor);
		$criteria->compare('supplier_description',$this->supplier_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}