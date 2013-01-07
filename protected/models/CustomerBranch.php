<?php

/**
 * This is the model class for table "customer_branch".
 *
 * The followings are the available columns in table 'customer_branch':
 * @property integer $id
 * @property integer $customer_head_id
 * @property string $name
 * @property string $reference
 * @property string $address
 * @property integer $area_id
 * @property integer $sales_person_id
 * @property string $contact_name
 * @property integer $default_location_id
 * @property integer $tax_group_id
 * @property integer $sales_account_id
 * @property integer $sales_discount_account_id
 * @property integer $receivable_account_id
 * @property integer $payment_discount_account_id
 * @property integer $default_shipping_company_id
 * @property integer $disable_transaction
 * @property string $br_post_address
 * @property integer $sales_group_id
 * @property string $note
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property Area $area
 * @property CustomerHead $customerHead
 * @property GeneralLedgerAccount $salesAccount
 * @property GeneralLedgerAccount $salesDiscountAccount
 * @property GeneralLedgerAccount $receivableAccount
 * @property GeneralLedgerAccount $paymentDiscountAccount
 * @property Location $defaultLocation
 * @property SalesSize $salesGroup
 * @property SalesPerson $salesPerson
 * @property ShippingCompany $defaultShippingCompany
 * @property TaxGroup $taxGroup
 * @property CustomerTransaction[] $customerTransactions
 * @property SalesOrder[] $salesOrders
 */
class CustomerBranch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerBranch the static model class
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
		return 'customer_branch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_head_id, name, reference, address, sales_person_id, contact_name, default_location_id, default_shipping_company_id, disable_transaction, br_post_address, note, active_status', 'required'),
			array('customer_head_id, area_id, sales_person_id, default_location_id, tax_group_id, sales_account_id, sales_discount_account_id, receivable_account_id, payment_discount_account_id, default_shipping_company_id, disable_transaction, sales_group_id, active_status', 'numerical', 'integerOnly'=>true),
			array('name, contact_name', 'length', 'max'=>60),
			array('reference', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, customer_head_id, name, reference, address, area_id, sales_person_id, contact_name, default_location_id, tax_group_id, sales_account_id, sales_discount_account_id, receivable_account_id, payment_discount_account_id, default_shipping_company_id, disable_transaction, br_post_address, sales_group_id, note, active_status', 'safe', 'on'=>'search'),
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
			'area' => array(self::BELONGS_TO, 'Area', 'area_id'),
			'customerHead' => array(self::BELONGS_TO, 'CustomerHead', 'customer_head_id'),
			'salesAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'sales_account_id'),
			'salesDiscountAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'sales_discount_account_id'),
			'receivableAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'receivable_account_id'),
			'paymentDiscountAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'payment_discount_account_id'),
			'defaultLocation' => array(self::BELONGS_TO, 'Location', 'default_location_id'),
			'salesGroup' => array(self::BELONGS_TO, 'SalesSize', 'sales_group_id'),
			'salesPerson' => array(self::BELONGS_TO, 'SalesPerson', 'sales_person_id'),
			'defaultShippingCompany' => array(self::BELONGS_TO, 'ShippingCompany', 'default_shipping_company_id'),
			'taxGroup' => array(self::BELONGS_TO, 'TaxGroup', 'tax_group_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'customer_branch_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'customer_branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customer_head_id' => 'Customer Head',
			'name' => 'Name',
			'reference' => 'Reference',
			'address' => 'Address',
			'area_id' => 'Area',
			'sales_person_id' => 'Sales Person',
			'contact_name' => 'Contact Name',
			'default_location_id' => 'Default Location',
			'tax_group_id' => 'Tax Group',
			'sales_account_id' => 'Sales Account',
			'sales_discount_account_id' => 'Sales Discount Account',
			'receivable_account_id' => 'Receivable Account',
			'payment_discount_account_id' => 'Payment Discount Account',
			'default_shipping_company_id' => 'Default Shipping Company',
			'disable_transaction' => 'Disable Transaction',
			'br_post_address' => 'Br Post Address',
			'sales_group_id' => 'Sales Group',
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
		$criteria->compare('customer_head_id',$this->customer_head_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('area_id',$this->area_id);
		$criteria->compare('sales_person_id',$this->sales_person_id);
		$criteria->compare('contact_name',$this->contact_name,true);
		$criteria->compare('default_location_id',$this->default_location_id);
		$criteria->compare('tax_group_id',$this->tax_group_id);
		$criteria->compare('sales_account_id',$this->sales_account_id);
		$criteria->compare('sales_discount_account_id',$this->sales_discount_account_id);
		$criteria->compare('receivable_account_id',$this->receivable_account_id);
		$criteria->compare('payment_discount_account_id',$this->payment_discount_account_id);
		$criteria->compare('default_shipping_company_id',$this->default_shipping_company_id);
		$criteria->compare('disable_transaction',$this->disable_transaction);
		$criteria->compare('br_post_address',$this->br_post_address,true);
		$criteria->compare('sales_group_id',$this->sales_group_id);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}