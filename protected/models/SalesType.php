<?php

/**
 * This is the model class for table "sales_type".
 *
 * The followings are the available columns in table 'sales_type':
 * @property integer $id
 * @property string $name
 * @property integer $tax_included_status
 * @property double $factor
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property CustomerHead[] $customerHeads
 * @property CustomerTransaction[] $customerTransactions
 * @property SalesPrice[] $salesPrices
 */
class SalesType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesType the static model class
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
		return 'sales_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, tax_included_status, factor, active_status', 'required'),
			array('tax_included_status, active_status', 'numerical', 'integerOnly'=>true),
			array('factor', 'numerical'),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, tax_included_status, factor, active_status', 'safe', 'on'=>'search'),
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
			'customerHeads' => array(self::HAS_MANY, 'CustomerHead', 'sales_type_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'sales_type_id'),
			'salesPrices' => array(self::HAS_MANY, 'SalesPrice', 'sales_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'tax_included_status' => 'Tax Included Status',
			'factor' => 'Factor',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tax_included_status',$this->tax_included_status);
		$criteria->compare('factor',$this->factor);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}