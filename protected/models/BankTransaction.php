<?php

/**
 * This is the model class for table "bank_transaction".
 *
 * The followings are the available columns in table 'bank_transaction':
 * @property integer $id
 * @property integer $transaction_type_id
 * @property integer $transaction_no
 * @property integer $bank_account_id
 * @property string $reference
 * @property string $transaction_date
 * @property double $amount
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property integer $person_type_id
 * @property string $person_id
 * @property string $reconciled
 *
 * The followings are the available model relations:
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property BankAccount $bankAccount
 * @property TransactionType $transactionType
 */
class BankTransaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BankTransaction the static model class
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
		return 'bank_transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bank_account_id, transaction_date, amount, dimension1_id, dimension2_id, person_type_id', 'required'),
			array('transaction_type_id, transaction_no, bank_account_id, dimension1_id, dimension2_id, person_type_id', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			array('reference', 'length', 'max'=>40),
			array('person_id, reconciled', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, transaction_type_id, transaction_no, bank_account_id, reference, transaction_date, amount, dimension1_id, dimension2_id, person_type_id, person_id, reconciled', 'safe', 'on'=>'search'),
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
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'bankAccount' => array(self::BELONGS_TO, 'BankAccount', 'bank_account_id'),
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'transaction_type_id' => 'Transaction Type',
			'transaction_no' => 'Transaction No',
			'bank_account_id' => 'Bank Account',
			'reference' => 'Reference',
			'transaction_date' => 'Transaction Date',
			'amount' => 'Amount',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'person_type_id' => 'Person Type',
			'person_id' => 'Person',
			'reconciled' => 'Reconciled',
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
		$criteria->compare('transaction_type_id',$this->transaction_type_id);
		$criteria->compare('transaction_no',$this->transaction_no);
		$criteria->compare('bank_account_id',$this->bank_account_id);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('transaction_date',$this->transaction_date,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('person_type_id',$this->person_type_id);
		$criteria->compare('person_id',$this->person_id,true);
		$criteria->compare('reconciled',$this->reconciled,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}