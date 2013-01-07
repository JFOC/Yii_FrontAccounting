<?php

/**
 * This is the model class for table "workorder_issue".
 *
 * The followings are the available columns in table 'workorder_issue':
 * @property integer $id
 * @property integer $workorder_id
 * @property string $reference
 * @property string $issue_date
 * @property integer $location_id
 * @property integer $workcenter_id
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property Workcenter $workcenter
 * @property Workorder $workorder
 * @property WorkorderIssueItem[] $workorderIssueItems
 */
class WorkorderIssue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkorderIssue the static model class
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
		return 'workorder_issue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('workorder_id', 'required'),
			array('workorder_id, location_id, workcenter_id', 'numerical', 'integerOnly'=>true),
			array('reference', 'length', 'max'=>100),
			array('issue_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, workorder_id, reference, issue_date, location_id, workcenter_id', 'safe', 'on'=>'search'),
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
			'workcenter' => array(self::BELONGS_TO, 'Workcenter', 'workcenter_id'),
			'workorder' => array(self::BELONGS_TO, 'Workorder', 'workorder_id'),
			'workorderIssueItems' => array(self::HAS_MANY, 'WorkorderIssueItem', 'workorder_issue_id'),
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
			'reference' => 'Reference',
			'issue_date' => 'Issue Date',
			'location_id' => 'Location',
			'workcenter_id' => 'Workcenter',
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
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('issue_date',$this->issue_date,true);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('workcenter_id',$this->workcenter_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}