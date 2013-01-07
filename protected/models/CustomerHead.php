<?php

/**
 * This is the model class for table "customer_head".
 *
 * The followings are the available columns in table 'customer_head':
 * @property integer $id
 * @property string $name
 * @property string $reference
 * @property string $address
 * @property string $goods_and_services_tax
 * @property integer $currency_id
 * @property integer $sales_type_id
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property integer $credit_status_id
 * @property integer $payment_term_id
 * @property double $discount
 * @property double $payment_discount
 * @property double $credit_limit
 * @property string $note
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property CustomerBranch[] $customerBranches
 * @property Currency $currency
 * @property CreditStatus $creditStatus
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property PaymentTerm $paymentTerm
 * @property SalesType $salesType
 * @property CustomerTransaction[] $customerTransactions
 * @property RecurrentInvoice[] $recurrentInvoices
 * @property SalesOrder[] $salesOrders
 */
class CustomerHead extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerHead the static model class
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
		return 'customer_head';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, reference, goods_and_services_tax, currency_id, sales_type_id, dimension1_id, dimension2_id, credit_status_id, discount, payment_discount, credit_limit, note, active_status', 'required'),
			array('currency_id, sales_type_id, dimension1_id, dimension2_id, credit_status_id, payment_term_id, active_status', 'numerical', 'integerOnly'=>true),
			array('discount, payment_discount, credit_limit', 'numerical'),
			array('name', 'length', 'max'=>100),
			array('reference', 'length', 'max'=>30),
			array('goods_and_services_tax', 'length', 'max'=>55),
			array('address', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, reference, address, goods_and_services_tax, currency_id, sales_type_id, dimension1_id, dimension2_id, credit_status_id, payment_term_id, discount, payment_discount, credit_limit, note, active_status', 'safe', 'on'=>'search'),
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
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'customer_head_id'),
			'currency' => array(self::BELONGS_TO, 'Currency', 'currency_id'),
			'creditStatus' => array(self::BELONGS_TO, 'CreditStatus', 'credit_status_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'paymentTerm' => array(self::BELONGS_TO, 'PaymentTerm', 'payment_term_id'),
			'salesType' => array(self::BELONGS_TO, 'SalesType', 'sales_type_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'customer_head_id'),
			'recurrentInvoices' => array(self::HAS_MANY, 'RecurrentInvoice', 'customer_head_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'customer_master_id'),
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
			'address' => 'Address',
			'goods_and_services_tax' => 'Goods And Services Tax',
			'currency_id' => 'Currency',
			'sales_type_id' => 'Sales Type',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'credit_status_id' => 'Credit Status',
			'payment_term_id' => 'Payment Term',
			'discount' => 'Discount',
			'payment_discount' => 'Payment Discount',
			'credit_limit' => 'Credit Limit',
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
		$criteria->compare('address',$this->address,true);
		$criteria->compare('goods_and_services_tax',$this->goods_and_services_tax,true);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('sales_type_id',$this->sales_type_id);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('credit_status_id',$this->credit_status_id);
		$criteria->compare('payment_term_id',$this->payment_term_id);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('payment_discount',$this->payment_discount);
		$criteria->compare('credit_limit',$this->credit_limit);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}