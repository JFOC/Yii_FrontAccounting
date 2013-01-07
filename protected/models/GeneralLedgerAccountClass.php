<?php

/**
 * This is the model class for table "general_ledger_account_class".
 *
 * The followings are the available columns in table 'general_ledger_account_class':
 * @property integer $id
 * @property string $name
 * @property integer $active_status
 * @property integer $old_id
 * @property integer $old_ctype_status
 * @property string $old_abbreviation
 *
 * The followings are the available model relations:
 * @property GeneralLedgerAccountType[] $generalLedgerAccountTypes
 */
class GeneralLedgerAccountClass extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GeneralLedgerAccountClass the static model class
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
		return 'general_ledger_account_class';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, active_status, old_id, old_ctype_status, old_abbreviation', 'required'),
			array('active_status, old_id, old_ctype_status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>60),
			array('old_abbreviation', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, active_status, old_id, old_ctype_status, old_abbreviation', 'safe', 'on'=>'search'),
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
			'generalLedgerAccountTypes' => array(self::HAS_MANY, 'GeneralLedgerAccountType', 'general_ledger_account_class_id'),
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
			'active_status' => 'Active Status',
			'old_id' => 'Old',
			'old_ctype_status' => 'Old Ctype Status',
			'old_abbreviation' => 'Old Abbreviation',
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
		$criteria->compare('active_status',$this->active_status);
		$criteria->compare('old_id',$this->old_id);
		$criteria->compare('old_ctype_status',$this->old_ctype_status);
		$criteria->compare('old_abbreviation',$this->old_abbreviation,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}