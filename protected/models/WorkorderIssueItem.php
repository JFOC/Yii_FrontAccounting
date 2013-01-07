<?php

/**
 * This is the model class for table "workorder_issue_item".
 *
 * The followings are the available columns in table 'workorder_issue_item':
 * @property integer $id
 * @property integer $stock_master_id
 * @property integer $workorder_issue_id
 * @property double $quantity_issued
 *
 * The followings are the available model relations:
 * @property StockMaster $stockMaster
 * @property WorkorderIssue $workorderIssue
 */
class WorkorderIssueItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkorderIssueItem the static model class
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
		return 'workorder_issue_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stock_master_id', 'required'),
			array('stock_master_id, workorder_issue_id', 'numerical', 'integerOnly'=>true),
			array('quantity_issued', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, stock_master_id, workorder_issue_id, quantity_issued', 'safe', 'on'=>'search'),
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
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
			'workorderIssue' => array(self::BELONGS_TO, 'WorkorderIssue', 'workorder_issue_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'stock_master_id' => 'Stock Master',
			'workorder_issue_id' => 'Workorder Issue',
			'quantity_issued' => 'Quantity Issued',
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
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('workorder_issue_id',$this->workorder_issue_id);
		$criteria->compare('quantity_issued',$this->quantity_issued);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}