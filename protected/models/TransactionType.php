<?php

/**
 * This is the model class for table "transaction_type".
 *
 * The followings are the available columns in table 'transaction_type':
 * @property integer $id
 * @property string $name
 * @property integer $type_no
 * @property string $next_reference
 * @property string $old_abbreviation
 * @property string $old_code
 *
 * The followings are the available model relations:
 * @property Attachment[] $attachments
 * @property AuditTrail[] $auditTrails
 * @property BankTransaction[] $bankTransactions
 * @property CustomerAllocation[] $customerAllocations
 * @property CustomerAllocation[] $customerAllocations1
 * @property CustomerTransaction[] $customerTransactions
 * @property SalesOrder[] $salesOrders
 */
class TransactionType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TransactionType the static model class
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
		return 'transaction_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name, type_no, next_reference, old_abbreviation, old_code', 'required'),
			array('id, type_no', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('next_reference, old_abbreviation', 'length', 'max'=>100),
			array('old_code', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, type_no, next_reference, old_abbreviation, old_code', 'safe', 'on'=>'search'),
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
			'attachments' => array(self::HAS_MANY, 'Attachment', 'transaction_type_id'),
			'auditTrails' => array(self::HAS_MANY, 'AuditTrail', 'transaction_type_id'),
			'bankTransactions' => array(self::HAS_MANY, 'BankTransaction', 'transaction_type_id'),
			'customerAllocations' => array(self::HAS_MANY, 'CustomerAllocation', 'from_transaction_type_id'),
			'customerAllocations1' => array(self::HAS_MANY, 'CustomerAllocation', 'to_transaction_type_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'transaction_type_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'transaction_type_id'),
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
			'type_no' => 'Type No',
			'next_reference' => 'Next Reference',
			'old_abbreviation' => 'Old Abbreviation',
			'old_code' => 'Old Code',
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
		$criteria->compare('type_no',$this->type_no);
		$criteria->compare('next_reference',$this->next_reference,true);
		$criteria->compare('old_abbreviation',$this->old_abbreviation,true);
		$criteria->compare('old_code',$this->old_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}