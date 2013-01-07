<?php

/**
 * This is the model class for table "customer_transaction".
 *
 * The followings are the available columns in table 'customer_transaction':
 * @property integer $id
 * @property integer $transaction_type_id
 * @property integer $transaction_no
 * @property integer $version_status
 * @property integer $customer_head_id
 * @property integer $customer_branch_id
 * @property string $date
 * @property string $due_date
 * @property string $reference
 * @property integer $sales_type_id
 * @property integer $order
 * @property double $overdue_amount
 * @property double $overdue_gst
 * @property double $overdue_freight
 * @property double $overdue_freight_tax
 * @property double $overdue_discount
 * @property double $allocation
 * @property double $rate
 * @property integer $shipping_company_id
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property integer $payment_term_id
 *
 * The followings are the available model relations:
 * @property CustomerBranch $customerBranch
 * @property CustomerHead $customerHead
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property PaymentTerm $paymentTerm
 * @property SalesType $salesType
 * @property ShippingCompany $shippingCompany
 * @property TransactionType $transactionType
 * @property CustomerTransactionItem[] $customerTransactionItems
 */
class CustomerTransaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerTransaction the static model class
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
		return 'customer_transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_type_id, transaction_no, version_status, customer_head_id, customer_branch_id, date, due_date, reference, sales_type_id, order, overdue_amount, overdue_gst, overdue_freight, overdue_freight_tax, overdue_discount, allocation, rate, shipping_company_id, dimension1_id, dimension2_id', 'required'),
			array('transaction_type_id, transaction_no, version_status, customer_head_id, customer_branch_id, sales_type_id, order, shipping_company_id, dimension1_id, dimension2_id, payment_term_id', 'numerical', 'integerOnly'=>true),
			array('overdue_amount, overdue_gst, overdue_freight, overdue_freight_tax, overdue_discount, allocation, rate', 'numerical'),
			array('reference', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, transaction_type_id, transaction_no, version_status, customer_head_id, customer_branch_id, date, due_date, reference, sales_type_id, order, overdue_amount, overdue_gst, overdue_freight, overdue_freight_tax, overdue_discount, allocation, rate, shipping_company_id, dimension1_id, dimension2_id, payment_term_id', 'safe', 'on'=>'search'),
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
			'customerHead' => array(self::BELONGS_TO, 'CustomerHead', 'customer_head_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'paymentTerm' => array(self::BELONGS_TO, 'PaymentTerm', 'payment_term_id'),
			'salesType' => array(self::BELONGS_TO, 'SalesType', 'sales_type_id'),
			'shippingCompany' => array(self::BELONGS_TO, 'ShippingCompany', 'shipping_company_id'),
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
			'customerTransactionItems' => array(self::HAS_MANY, 'CustomerTransactionItem', 'customer_transaction_id'),
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
			'version_status' => 'Version Status',
			'customer_head_id' => 'Customer Head',
			'customer_branch_id' => 'Customer Branch',
			'date' => 'Date',
			'due_date' => 'Due Date',
			'reference' => 'Reference',
			'sales_type_id' => 'Sales Type',
			'order' => 'Order',
			'overdue_amount' => 'Overdue Amount',
			'overdue_gst' => 'Overdue Gst',
			'overdue_freight' => 'Overdue Freight',
			'overdue_freight_tax' => 'Overdue Freight Tax',
			'overdue_discount' => 'Overdue Discount',
			'allocation' => 'Allocation',
			'rate' => 'Rate',
			'shipping_company_id' => 'Shipping Company',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'payment_term_id' => 'Payment Term',
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
		$criteria->compare('version_status',$this->version_status);
		$criteria->compare('customer_head_id',$this->customer_head_id);
		$criteria->compare('customer_branch_id',$this->customer_branch_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('sales_type_id',$this->sales_type_id);
		$criteria->compare('order',$this->order);
		$criteria->compare('overdue_amount',$this->overdue_amount);
		$criteria->compare('overdue_gst',$this->overdue_gst);
		$criteria->compare('overdue_freight',$this->overdue_freight);
		$criteria->compare('overdue_freight_tax',$this->overdue_freight_tax);
		$criteria->compare('overdue_discount',$this->overdue_discount);
		$criteria->compare('allocation',$this->allocation);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('shipping_company_id',$this->shipping_company_id);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('payment_term_id',$this->payment_term_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}