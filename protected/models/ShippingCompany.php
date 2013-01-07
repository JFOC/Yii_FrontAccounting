<?php

/**
 * This is the model class for table "shipping_company".
 *
 * The followings are the available columns in table 'shipping_company':
 * @property integer $id
 * @property string $name
 * @property string $phone1
 * @property string $phone2
 * @property string $contact
 * @property string $address
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property CustomerBranch[] $customerBranches
 * @property CustomerTransaction[] $customerTransactions
 * @property SalesOrder[] $salesOrders
 */
class ShippingCompany extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ShippingCompany the static model class
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
		return 'shipping_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone1, phone2, contact, address, active_status', 'required'),
			array('active_status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>60),
			array('phone1, phone2', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, phone1, phone2, contact, address, active_status', 'safe', 'on'=>'search'),
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
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'default_shipping_company_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'shipping_company_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'shipping_company_id'),
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
			'phone1' => 'Phone1',
			'phone2' => 'Phone2',
			'contact' => 'Contact',
			'address' => 'Address',
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
		$criteria->compare('phone1',$this->phone1,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}