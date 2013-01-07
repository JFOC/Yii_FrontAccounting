<?php

/**
 * This is the model class for table "supplier_transaction".
 *
 * The followings are the available columns in table 'supplier_transaction':
 * @property integer $id
 * @property integer $type
 * @property integer $supplier_id
 * @property string $reference
 * @property string $supplier_reference
 * @property string $transaction_date
 * @property string $due_date
 * @property double $overdue_amount
 * @property double $overdue_discount
 * @property double $overdue_gst
 * @property double $rate
 * @property double $allocation
 * @property integer $tax_included_status
 *
 * The followings are the available model relations:
 * @property Supplier $supplier
 */
class SupplierTransaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SupplierTransaction the static model class
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
		return 'supplier_transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, type, reference, supplier_reference, transaction_date, due_date, overdue_amount, overdue_discount, overdue_gst, rate, allocation, tax_included_status', 'required'),
			array('id, type, supplier_id, tax_included_status', 'numerical', 'integerOnly'=>true),
			array('overdue_amount, overdue_discount, overdue_gst, rate, allocation', 'numerical'),
			array('supplier_reference', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, supplier_id, reference, supplier_reference, transaction_date, due_date, overdue_amount, overdue_discount, overdue_gst, rate, allocation, tax_included_status', 'safe', 'on'=>'search'),
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
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Type',
			'supplier_id' => 'Supplier',
			'reference' => 'Reference',
			'supplier_reference' => 'Supplier Reference',
			'transaction_date' => 'Transaction Date',
			'due_date' => 'Due Date',
			'overdue_amount' => 'Overdue Amount',
			'overdue_discount' => 'Overdue Discount',
			'overdue_gst' => 'Overdue Gst',
			'rate' => 'Rate',
			'allocation' => 'Allocation',
			'tax_included_status' => 'Tax Included Status',
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
		$criteria->compare('type',$this->type);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('supplier_reference',$this->supplier_reference,true);
		$criteria->compare('transaction_date',$this->transaction_date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('overdue_amount',$this->overdue_amount);
		$criteria->compare('overdue_discount',$this->overdue_discount);
		$criteria->compare('overdue_gst',$this->overdue_gst);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('allocation',$this->allocation);
		$criteria->compare('tax_included_status',$this->tax_included_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}