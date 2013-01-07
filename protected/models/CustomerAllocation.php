<?php

/**
 * This is the model class for table "customer_allocation".
 *
 * The followings are the available columns in table 'customer_allocation':
 * @property integer $id
 * @property double $amount
 * @property string $date
 * @property integer $from_transaction_type_id
 * @property integer $from_transaction_no
 * @property integer $to_transaction_type_id
 * @property integer $to_transaction_no
 *
 * The followings are the available model relations:
 * @property TransactionType $fromTransactionType
 * @property TransactionType $toTransactionType
 */
class CustomerAllocation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerAllocation the static model class
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
		return 'customer_allocation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date', 'required'),
			array('from_transaction_type_id, from_transaction_no, to_transaction_type_id, to_transaction_no', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, amount, date, from_transaction_type_id, from_transaction_no, to_transaction_type_id, to_transaction_no', 'safe', 'on'=>'search'),
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
			'fromTransactionType' => array(self::BELONGS_TO, 'TransactionType', 'from_transaction_type_id'),
			'toTransactionType' => array(self::BELONGS_TO, 'TransactionType', 'to_transaction_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'amount' => 'Amount',
			'date' => 'Date',
			'from_transaction_type_id' => 'From Transaction Type',
			'from_transaction_no' => 'From Transaction No',
			'to_transaction_type_id' => 'To Transaction Type',
			'to_transaction_no' => 'To Transaction No',
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
		$criteria->compare('amount',$this->amount);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('from_transaction_type_id',$this->from_transaction_type_id);
		$criteria->compare('from_transaction_no',$this->from_transaction_no);
		$criteria->compare('to_transaction_type_id',$this->to_transaction_type_id);
		$criteria->compare('to_transaction_no',$this->to_transaction_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}