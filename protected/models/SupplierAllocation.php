<?php

/**
 * This is the model class for table "supplier_allocation".
 *
 * The followings are the available columns in table 'supplier_allocation':
 * @property integer $id
 * @property double $amount
 * @property string $allocation_date
 * @property integer $transaction_no_from
 * @property integer $transaction_type_from
 * @property integer $transaction_no_to
 * @property integer $transaction_type_to
 */
class SupplierAllocation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SupplierAllocation the static model class
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
		return 'supplier_allocation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('allocation_date', 'required'),
			array('transaction_no_from, transaction_type_from, transaction_no_to, transaction_type_to', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, amount, allocation_date, transaction_no_from, transaction_type_from, transaction_no_to, transaction_type_to', 'safe', 'on'=>'search'),
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
			'allocation_date' => 'Allocation Date',
			'transaction_no_from' => 'Transaction No From',
			'transaction_type_from' => 'Transaction Type From',
			'transaction_no_to' => 'Transaction No To',
			'transaction_type_to' => 'Transaction Type To',
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
		$criteria->compare('allocation_date',$this->allocation_date,true);
		$criteria->compare('transaction_no_from',$this->transaction_no_from);
		$criteria->compare('transaction_type_from',$this->transaction_type_from);
		$criteria->compare('transaction_no_to',$this->transaction_no_to);
		$criteria->compare('transaction_type_to',$this->transaction_type_to);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}