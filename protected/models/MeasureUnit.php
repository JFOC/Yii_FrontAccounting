<?php

/**
 * This is the model class for table "measure_unit".
 *
 * The followings are the available columns in table 'measure_unit':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $decimals
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property PurchasePrice[] $purchasePrices
 * @property StockCategory[] $stockCategories
 * @property StockMaster[] $stockMasters
 */
class MeasureUnit extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MeasureUnit the static model class
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
		return 'measure_unit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, decimals, active_status', 'required'),
			array('decimals, active_status', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>20),
			array('name', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, decimals, active_status', 'safe', 'on'=>'search'),
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
			'purchasePrices' => array(self::HAS_MANY, 'PurchasePrice', 'supplier_measure_unit_id'),
			'stockCategories' => array(self::HAS_MANY, 'StockCategory', 'default_measure_unit_id'),
			'stockMasters' => array(self::HAS_MANY, 'StockMaster', 'measure_unit_id'),
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
			'name' => 'Name',
			'decimals' => 'Decimals',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('decimals',$this->decimals);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}