<?php

/**
 * This is the model class for table "sales_person".
 *
 * The followings are the available columns in table 'sales_person':
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property double $provision
 * @property double $provision2
 * @property double $break_pt
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property CustomerBranch[] $customerBranches
 */
class SalesPerson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesPerson the static model class
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
		return 'sales_person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, fax, email, provision, provision2, break_pt, active_status', 'required'),
			array('active_status', 'numerical', 'integerOnly'=>true),
			array('provision, provision2, break_pt', 'numerical'),
			array('name', 'length', 'max'=>60),
			array('phone, fax', 'length', 'max'=>30),
			array('email', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, phone, fax, email, provision, provision2, break_pt, active_status', 'safe', 'on'=>'search'),
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
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'sales_person_id'),
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
			'phone' => 'Phone',
			'fax' => 'Fax',
			'email' => 'Email',
			'provision' => 'Provision',
			'provision2' => 'Provision2',
			'break_pt' => 'Break Pt',
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
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('provision',$this->provision);
		$criteria->compare('provision2',$this->provision2);
		$criteria->compare('break_pt',$this->break_pt);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}