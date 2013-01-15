<?php

/**
 * This is the model class for table "sales_order".
 *
 * The followings are the available columns in table 'sales_order':
 * @property integer $id
 * @property integer $transaction_number
 * @property integer $transaction_type_id
 * @property integer $version_status
 * @property integer $type_status
 * @property integer $customer_master_id
 * @property integer $customer_branch_id
 * @property string $reference
 * @property string $customer_reference
 * @property string $comment
 * @property string $order_date
 * @property integer $order_type
 * @property integer $shipping_company_id
 * @property string $delivery_address
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $deliver_to
 * @property double $freight_cost
 * @property integer $from_stock_location_id
 * @property string $delivery_date
 * @property integer $payment_term_id
 * @property double $total
 *
 * The followings are the available model relations:
 * @property CustomerBranch $customerBranch
 * @property CustomerHead $customerMaster
 * @property Location $fromStockLocation
 * @property PaymentTerm $paymentTerm
 * @property ShippingCompany $shippingCompany
 * @property TransactionType $transactionType
 * @property SalesOrderDetail[] $salesOrderDetails
 */
class SalesOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesOrder the static model class
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
		return 'sales_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_number, transaction_type_id, version_status, type_status, customer_master_id, customer_branch_id, reference, customer_reference, order_date, order_type, shipping_company_id, delivery_address, deliver_to, freight_cost, from_stock_location_id, delivery_date, payment_term_id, total', 'required'),
			array('transaction_number, transaction_type_id, version_status, type_status, customer_master_id, customer_branch_id, order_type, shipping_company_id, from_stock_location_id, payment_term_id', 'numerical', 'integerOnly'=>true),
			array('freight_cost, total', 'numerical'),
			array('reference, contact_email', 'length', 'max'=>100),
			array('contact_phone', 'length', 'max'=>30),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, transaction_number, transaction_type_id, version_status, type_status, customer_master_id, customer_branch_id, reference, customer_reference, comment, order_date, order_type, shipping_company_id, delivery_address, contact_phone, contact_email, deliver_to, freight_cost, from_stock_location_id, delivery_date, payment_term_id, total', 'safe', 'on'=>'search'),
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
			'customerBranch' => array(self::BELONGS_TO, 'CustomerBranch', 'customer_branch_id'),
			'customerMaster' => array(self::BELONGS_TO, 'CustomerHead', 'customer_master_id'),
			'fromStockLocation' => array(self::BELONGS_TO, 'Location', 'from_stock_location_id'),
			'paymentTerm' => array(self::BELONGS_TO, 'PaymentTerm', 'payment_term_id'),
			'shippingCompany' => array(self::BELONGS_TO, 'ShippingCompany', 'shipping_company_id'),
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
			'salesOrderDetails' => array(self::HAS_MANY, 'SalesOrderDetail', 'sales_order_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'transaction_number' => 'Transaction Number',
			'transaction_type_id' => 'Transaction Type',
			'version_status' => 'Version Status',
			'type_status' => 'Type Status',
			'customer_master_id' => 'Customer Master',
			'customer_branch_id' => 'Customer Branch',
			'reference' => 'Reference',
			'customer_reference' => 'Customer Reference',
			'comment' => 'Comment',
			'order_date' => 'Order Date',
			'order_type' => 'Order Type',
			'shipping_company_id' => 'Shipping Company',
			'delivery_address' => 'Delivery Address',
			'contact_phone' => 'Contact Phone',
			'contact_email' => 'Contact Email',
			'deliver_to' => 'Deliver To',
			'freight_cost' => 'Freight Cost',
			'from_stock_location_id' => 'From Stock Location',
			'delivery_date' => 'Delivery Date',
			'payment_term_id' => 'Payment Term',
			'total' => 'Total',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	 //var $munit;
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('transaction_number',$this->transaction_number);
		$criteria->compare('transaction_type_id',$this->transaction_type_id);
		$criteria->compare('version_status',$this->version_status);
		$criteria->compare('type_status',$this->type_status);
		$criteria->compare('customer_master_id',$this->customer_master_id);
		$criteria->compare('customer_branch_id',$this->customer_branch_id);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('customer_reference',$this->customer_reference,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('order_date',$this->order_date,true);
		$criteria->compare('order_type',$this->order_type);
		$criteria->compare('shipping_company_id',$this->shipping_company_id);
		$criteria->compare('delivery_address',$this->delivery_address,true);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('deliver_to',$this->deliver_to,true);
		$criteria->compare('freight_cost',$this->freight_cost);
		$criteria->compare('from_stock_location_id',$this->from_stock_location_id);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('payment_term_id',$this->payment_term_id);
		$criteria->compare('total',$this->total);
		// $criteria->compare('Transaction.name',$this->munit);

		// $criteria->with = 'transactionType';	
			
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}