<?php

/**
 * This is the model class for table "contact_person".
 *
 * The followings are the available columns in table 'contact_person':
 * @property integer $id
 * @property string $name
 * @property string $name2
 * @property string $reference
 * @property string $address
 * @property string $address2
 * @property string $phone
 * @property string $phone2
 * @property string $fax
 * @property string $email
 * @property string $email2
 * @property integer $language_id
 * @property string $note
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property ContactAssociation[] $contactAssociations
 * @property Language $language
 */
class ContactPerson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactPerson the static model class
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
		return 'contact_person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, reference, phone, active_status', 'required'),
			array('language_id, active_status', 'numerical', 'integerOnly'=>true),
			array('name, name2', 'length', 'max'=>60),
			array('reference, phone, phone2, fax', 'length', 'max'=>30),
			array('email, email2', 'length', 'max'=>100),
			array('address, address2, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, name2, reference, address, address2, phone, phone2, fax, email, email2, language_id, note, active_status', 'safe', 'on'=>'search'),
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
			'contactAssociations' => array(self::HAS_MANY, 'ContactAssociation', 'contact_person_id'),
			'language' => array(self::BELONGS_TO, 'Language', 'language_id'),
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
			'name2' => 'Name2',
			'reference' => 'Reference',
			'address' => 'Address',
			'address2' => 'Address2',
			'phone' => 'Phone',
			'phone2' => 'Phone2',
			'fax' => 'Fax',
			'email' => 'Email',
			'email2' => 'Email2',
			'language_id' => 'Language',
			'note' => 'Note',
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
		$criteria->compare('name2',$this->name2,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('language_id',$this->language_id);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}