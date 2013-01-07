<?php

/**
 * This is the model class for table "bank_account".
 *
 * The followings are the available columns in table 'bank_account':
 * @property integer $id
 * @property integer $general_ledger_account_id
 * @property integer $bank_account_type_id
 * @property string $account_name
 * @property string $account_number
 * @property string $bank_name
 * @property string $address
 * @property integer $currency_id
 * @property integer $default_currency_account_status
 * @property string $last_reconciled_date
 * @property double $ending_reconcile_balance
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property BankAccountType $bankAccountType
 * @property Currency $currency
 * @property GeneralLedgerAccount $generalLedgerAccount
 * @property BankTransaction[] $bankTransactions
 */
class BankAccount extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BankAccount the static model class
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
		return 'bank_account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('general_ledger_account_id, bank_account_type_id, account_name, account_number, bank_name, address, currency_id, default_currency_account_status, last_reconciled_date, ending_reconcile_balance, active_status', 'required'),
			array('general_ledger_account_id, bank_account_type_id, currency_id, default_currency_account_status, active_status', 'numerical', 'integerOnly'=>true),
			array('ending_reconcile_balance', 'numerical'),
			array('account_name, bank_name', 'length', 'max'=>60),
			array('account_number', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, general_ledger_account_id, bank_account_type_id, account_name, account_number, bank_name, address, currency_id, default_currency_account_status, last_reconciled_date, ending_reconcile_balance, active_status', 'safe', 'on'=>'search'),
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
			'bankAccountType' => array(self::BELONGS_TO, 'BankAccountType', 'bank_account_type_id'),
			'currency' => array(self::BELONGS_TO, 'Currency', 'currency_id'),
			'generalLedgerAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'general_ledger_account_id'),
			'bankTransactions' => array(self::HAS_MANY, 'BankTransaction', 'bank_account_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'general_ledger_account_id' => 'General Ledger Account',
			'bank_account_type_id' => 'Bank Account Type',
			'account_name' => 'Account Name',
			'account_number' => 'Account Number',
			'bank_name' => 'Bank Name',
			'address' => 'Address',
			'currency_id' => 'Currency',
			'default_currency_account_status' => 'Default Currency Account Status',
			'last_reconciled_date' => 'Last Reconciled Date',
			'ending_reconcile_balance' => 'Ending Reconcile Balance',
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
		$criteria->compare('general_ledger_account_id',$this->general_ledger_account_id);
		$criteria->compare('bank_account_type_id',$this->bank_account_type_id);
		$criteria->compare('account_name',$this->account_name,true);
		$criteria->compare('account_number',$this->account_number,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('default_currency_account_status',$this->default_currency_account_status);
		$criteria->compare('last_reconciled_date',$this->last_reconciled_date,true);
		$criteria->compare('ending_reconcile_balance',$this->ending_reconcile_balance);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}