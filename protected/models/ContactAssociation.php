<?php

/**
 * This is the model class for table "contact_association".
 *
 * The followings are the available columns in table 'contact_association':
 * @property integer $id
 * @property integer $contact_person_id
 * @property integer $contact_category_id
 * @property integer $entity_id
 *
 * The followings are the available model relations:
 * @property ContactCategory $contactCategory
 * @property ContactPerson $contactPerson
 */
class ContactAssociation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactAssociation the static model class
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
		return 'contact_association';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_person_id, contact_category_id', 'required'),
			array('contact_person_id, contact_category_id, entity_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, contact_person_id, contact_category_id, entity_id', 'safe', 'on'=>'search'),
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
			'contactCategory' => array(self::BELONGS_TO, 'ContactCategory', 'contact_category_id'),
			'contactPerson' => array(self::BELONGS_TO, 'ContactPerson', 'contact_person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'contact_person_id' => 'Contact Person',
			'contact_category_id' => 'Contact Category',
			'entity_id' => 'Entity',
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
		$criteria->compare('contact_person_id',$this->contact_person_id);
		$criteria->compare('contact_category_id',$this->contact_category_id);
		$criteria->compare('entity_id',$this->entity_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}