<?php

/**
 * This is the model class for table "supplier".
 *
 * The followings are the available columns in table 'supplier':
 * @property integer $id
 * @property string $name
 * @property string $reference
 * @property string $mailing_address
 * @property string $physical_address
 * @property string $gst_no
 * @property string $contact
 * @property string $account_no
 * @property string $website
 * @property string $bank_account
 * @property integer $currency_id
 * @property integer $payment_term_id
 * @property integer $tax_included_status
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property integer $tax_group_id
 * @property double $credit_limit
 * @property integer $purchase_account_id
 * @property integer $payable_account_id
 * @property integer $payment_discount_account_id
 * @property string $note
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property GrnBatch[] $grnBatches
 * @property PurchaseOrder[] $purchaseOrders
 * @property PurchasePrice[] $purchasePrices
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property Currency $currency
 * @property GeneralLedgerAccount $purchaseAccount
 * @property GeneralLedgerAccount $payableAccount
 * @property GeneralLedgerAccount $paymentDiscountAccount
 * @property PaymentTerm $paymentTerm
 * @property TaxGroup $taxGroup
 * @property SupplierTransaction[] $supplierTransactions
 */
class Supplier extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Supplier the static model class
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
		return 'supplier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, reference, mailing_address, physical_address, gst_no, contact, account_no, website, bank_account, tax_included_status, credit_limit, purchase_account_id, note, active_status', 'required'),
			array('currency_id, payment_term_id, tax_included_status, dimension1_id, dimension2_id, tax_group_id, purchase_account_id, payable_account_id, payment_discount_account_id, active_status', 'numerical', 'integerOnly'=>true),
			array('credit_limit', 'numerical'),
			array('name, contact, bank_account', 'length', 'max'=>60),
			array('reference', 'length', 'max'=>30),
			array('gst_no', 'length', 'max'=>25),
			array('account_no', 'length', 'max'=>40),
			array('website', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, reference, mailing_address, physical_address, gst_no, contact, account_no, website, bank_account, currency_id, payment_term_id, tax_included_status, dimension1_id, dimension2_id, tax_group_id, credit_limit, purchase_account_id, payable_account_id, payment_discount_account_id, note, active_status', 'safe', 'on'=>'search'),
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
			'grnBatches' => array(self::HAS_MANY, 'GrnBatch', 'supplier_id'),
			'purchaseOrders' => array(self::HAS_MANY, 'PurchaseOrder', 'supplier_id'),
			'purchasePrices' => array(self::HAS_MANY, 'PurchasePrice', 'supplier_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'currency' => array(self::BELONGS_TO, 'Currency', 'currency_id'),
			'purchaseAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'purchase_account_id'),
			'payableAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'payable_account_id'),
			'paymentDiscountAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'payment_discount_account_id'),
			'paymentTerm' => array(self::BELONGS_TO, 'PaymentTerm', 'payment_term_id'),
			'taxGroup' => array(self::BELONGS_TO, 'TaxGroup', 'tax_group_id'),
			'supplierTransactions' => array(self::HAS_MANY, 'SupplierTransaction', 'supplier_id'),
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
			'reference' => 'Reference',
			'mailing_address' => 'Mailing Address',
			'physical_address' => 'Physical Address',
			'gst_no' => 'Gst No',
			'contact' => 'Contact',
			'account_no' => 'Account No',
			'website' => 'Website',
			'bank_account' => 'Bank Account',
			'currency_id' => 'Currency',
			'payment_term_id' => 'Payment Term',
			'tax_included_status' => 'Tax Included Status',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'tax_group_id' => 'Tax Group',
			'credit_limit' => 'Credit Limit',
			'purchase_account_id' => 'Purchase Account',
			'payable_account_id' => 'Payable Account',
			'payment_discount_account_id' => 'Payment Discount Account',
			'note' => 'Note',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('mailing_address',$this->mailing_address,true);
		$criteria->compare('physical_address',$this->physical_address,true);
		$criteria->compare('gst_no',$this->gst_no,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('account_no',$this->account_no,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('bank_account',$this->bank_account,true);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('payment_term_id',$this->payment_term_id);
		$criteria->compare('tax_included_status',$this->tax_included_status);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('tax_group_id',$this->tax_group_id);
		$criteria->compare('credit_limit',$this->credit_limit);
		$criteria->compare('purchase_account_id',$this->purchase_account_id);
		$criteria->compare('payable_account_id',$this->payable_account_id);
		$criteria->compare('payment_discount_account_id',$this->payment_discount_account_id);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}