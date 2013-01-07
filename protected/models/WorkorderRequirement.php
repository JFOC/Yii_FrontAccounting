<?php

/**
 * This is the model class for table "workorder_requirement".
 *
 * The followings are the available columns in table 'workorder_requirement':
 * @property integer $id
 * @property integer $workorder_id
 * @property integer $stock_master_id
 * @property integer $workcenter_id
 * @property double $unit_req
 * @property double $standard_cost
 * @property integer $location_id
 * @property double $unit_issued
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property StockMaster $stockMaster
 * @property Workcenter $workcenter
 * @property Workorder $workorder
 */
class WorkorderRequirement extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkorderRequirement the static model class
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
		return 'workorder_requirement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('workorder_id, stock_master_id, workcenter_id, unit_req, standard_cost, location_id, unit_issued', 'required'),
			array('workorder_id, stock_master_id, workcenter_id, location_id', 'numerical', 'integerOnly'=>true),
			array('unit_req, standard_cost, unit_issued', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, workorder_id, stock_master_id, workcenter_id, unit_req, standard_cost, location_id, unit_issued', 'safe', 'on'=>'search'),
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
			'workcenter' => array(self::BELONGS_TO, 'Workcenter', 'workcenter_id'),
			'workorder' => array(self::BELONGS_TO, 'Workorder', 'workorder_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'workorder_id' => 'Workorder',
			'stock_master_id' => 'Stock Master',
			'workcenter_id' => 'Workcenter',
			'unit_req' => 'Unit Req',
			'standard_cost' => 'Standard Cost',
			'location_id' => 'Location',
			'unit_issued' => 'Unit Issued',
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
		$criteria->compare('workorder_id',$this->workorder_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('workcenter_id',$this->workcenter_id);
		$criteria->compare('unit_req',$this->unit_req);
		$criteria->compare('standard_cost',$this->standard_cost);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('unit_issued',$this->unit_issued);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}