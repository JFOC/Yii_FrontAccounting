<?php

/**
 * This is the model class for table "contact_category".
 *
 * The followings are the available columns in table 'contact_category':
 * @property integer $id
 * @property string $name
 * @property integer $contact_entity_id
 * @property string $description
 * @property integer $system_status
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property ContactAssociation[] $contactAssociations
 * @property ContactEntity $contactEntity
 */
class ContactCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactCategory the static model class
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
		return 'contact_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, contact_entity_id, description, system_status, active_status', 'required'),
			array('contact_entity_id, system_status, active_status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, contact_entity_id, description, system_status, active_status', 'safe', 'on'=>'search'),
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
			'contactAssociations' => array(self::HAS_MANY, 'ContactAssociation', 'contact_category_id'),
			'contactEntity' => array(self::BELONGS_TO, 'ContactEntity', 'contact_entity_id'),
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
			'contact_entity_id' => 'Contact Entity',
			'description' => 'Description',
			'system_status' => 'System Status',
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
		$criteria->compare('contact_entity_id',$this->contact_entity_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('system_status',$this->system_status);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}