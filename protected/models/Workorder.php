<?php

/**
 * This is the model class for table "workorder".
 *
 * The followings are the available columns in table 'workorder':
 * @property integer $id
 * @property string $reference
 * @property integer $location_id
 * @property double $unit_reqd
 * @property integer $stock_master_id
 * @property string $date
 * @property integer $type
 * @property string $required_by
 * @property string $released_date
 * @property double $units_issued
 * @property integer $closed_status
 * @property integer $released_status
 * @property double $additional_cost
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property StockMaster $stockMaster
 * @property WorkorderIssue[] $workorderIssues
 * @property WorkorderManufacture[] $workorderManufactures
 * @property WorkorderRequirement[] $workorderRequirements
 */
class Workorder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Workorder the static model class
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
		return 'workorder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reference, location_id, unit_reqd, stock_master_id, date, type, required_by, released_date, units_issued, closed_status, released_status, additional_cost', 'required'),
			array('location_id, stock_master_id, type, closed_status, released_status', 'numerical', 'integerOnly'=>true),
			array('unit_reqd, units_issued, additional_cost', 'numerical'),
			array('reference', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, reference, location_id, unit_reqd, stock_master_id, date, type, required_by, released_date, units_issued, closed_status, released_status, additional_cost', 'safe', 'on'=>'search'),
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
			'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
			'workorderIssues' => array(self::HAS_MANY, 'WorkorderIssue', 'workorder_id'),
			'workorderManufactures' => array(self::HAS_MANY, 'WorkorderManufacture', 'workorder_id'),
			'workorderRequirements' => array(self::HAS_MANY, 'WorkorderRequirement', 'workorder_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'reference' => 'Reference',
			'location_id' => 'Location',
			'unit_reqd' => 'Unit Reqd',
			'stock_master_id' => 'Stock Master',
			'date' => 'Date',
			'type' => 'Type',
			'required_by' => 'Required By',
			'released_date' => 'Released Date',
			'units_issued' => 'Units Issued',
			'closed_status' => 'Closed Status',
			'released_status' => 'Released Status',
			'additional_cost' => 'Additional Cost',
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
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('unit_reqd',$this->unit_reqd);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('required_by',$this->required_by,true);
		$criteria->compare('released_date',$this->released_date,true);
		$criteria->compare('units_issued',$this->units_issued);
		$criteria->compare('closed_status',$this->closed_status);
		$criteria->compare('released_status',$this->released_status);
		$criteria->compare('additional_cost',$this->additional_cost);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}