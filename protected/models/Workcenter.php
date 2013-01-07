<?php

/**
 * This is the model class for table "workcenter".
 *
 * The followings are the available columns in table 'workcenter':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property BillOfMaterial[] $billOfMaterials
 * @property WorkorderIssue[] $workorderIssues
 * @property WorkorderRequirement[] $workorderRequirements
 */
class Workcenter extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Workcenter the static model class
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
		return 'workcenter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, active_status', 'required'),
			array('active_status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>40),
			array('description', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, active_status', 'safe', 'on'=>'search'),
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
			'billOfMaterials' => array(self::HAS_MANY, 'BillOfMaterial', 'workcenter_added'),
			'workorderIssues' => array(self::HAS_MANY, 'WorkorderIssue', 'workcenter_id'),
			'workorderRequirements' => array(self::HAS_MANY, 'WorkorderRequirement', 'workcenter_id'),
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
			'description' => 'Description',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}