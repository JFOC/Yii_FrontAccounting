<?php

/**
 * This is the model class for table "quick_entry".
 *
 * The followings are the available columns in table 'quick_entry':
 * @property integer $id
 * @property integer $quick_entry_type_id
 * @property string $description
 * @property double $base_amount
 * @property string $base_description
 * @property integer $bal_type_status
 *
 * The followings are the available model relations:
 * @property QuickEntryType $quickEntryType
 * @property QuickEntryLine[] $quickEntryLines
 */
class QuickEntry extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return QuickEntry the static model class
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
		return 'quick_entry';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quick_entry_type_id, description, base_amount, bal_type_status', 'required'),
			array('quick_entry_type_id, bal_type_status', 'numerical', 'integerOnly'=>true),
			array('base_amount', 'numerical'),
			array('description, base_description', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, quick_entry_type_id, description, base_amount, base_description, bal_type_status', 'safe', 'on'=>'search'),
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
			'quickEntryType' => array(self::BELONGS_TO, 'QuickEntryType', 'quick_entry_type_id'),
			'quickEntryLines' => array(self::HAS_MANY, 'QuickEntryLine', 'quick_entry_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'quick_entry_type_id' => 'Quick Entry Type',
			'description' => 'Description',
			'base_amount' => 'Base Amount',
			'base_description' => 'Base Description',
			'bal_type_status' => 'Bal Type Status',
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
		$criteria->compare('quick_entry_type_id',$this->quick_entry_type_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('base_amount',$this->base_amount);
		$criteria->compare('base_description',$this->base_description,true);
		$criteria->compare('bal_type_status',$this->bal_type_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}