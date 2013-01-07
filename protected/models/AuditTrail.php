<?php

/**
 * This is the model class for table "audit_trail".
 *
 * The followings are the available columns in table 'audit_trail':
 * @property integer $id
 * @property integer $transaction_type_id
 * @property integer $transaction_no
 * @property integer $user_id
 * @property string $stamp
 * @property string $description
 * @property integer $fiscal_year
 * @property string $general_ledger_date
 * @property integer $general_ledger_seq
 *
 * The followings are the available model relations:
 * @property User $user
 * @property TransactionType $transactionType
 */
class AuditTrail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AuditTrail the static model class
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
		return 'audit_trail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_type_id, transaction_no, user_id, stamp, fiscal_year, general_ledger_date', 'required'),
			array('transaction_type_id, transaction_no, user_id, fiscal_year, general_ledger_seq', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, transaction_type_id, transaction_no, user_id, stamp, description, fiscal_year, general_ledger_date, general_ledger_seq', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
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
			'user_id' => 'User',
			'stamp' => 'Stamp',
			'description' => 'Description',
			'fiscal_year' => 'Fiscal Year',
			'general_ledger_date' => 'General Ledger Date',
			'general_ledger_seq' => 'General Ledger Seq',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('stamp',$this->stamp,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('fiscal_year',$this->fiscal_year);
		$criteria->compare('general_ledger_date',$this->general_ledger_date,true);
		$criteria->compare('general_ledger_seq',$this->general_ledger_seq);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}