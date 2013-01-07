<?php

/**
 * This is the model class for table "tax_transaction_item".
 *
 * The followings are the available columns in table 'tax_transaction_item':
 * @property integer $id
 * @property integer $transaction_type
 * @property integer $transaction_no
 * @property string $transaction_date
 * @property integer $tax_type_id
 * @property double $rate
 * @property double $ex_rate
 * @property integer $included_in_price_status
 * @property double $net_amount
 * @property double $amount
 * @property string $memo
 *
 * The followings are the available model relations:
 * @property TaxType $taxType
 */
class TaxTransactionItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TaxTransactionItem the static model class
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
		return 'tax_transaction_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_date, tax_type_id, rate, ex_rate, included_in_price_status, net_amount, amount', 'required'),
			array('transaction_type, transaction_no, tax_type_id, included_in_price_status', 'numerical', 'integerOnly'=>true),
			array('rate, ex_rate, net_amount, amount', 'numerical'),
			array('memo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, transaction_type, transaction_no, transaction_date, tax_type_id, rate, ex_rate, included_in_price_status, net_amount, amount, memo', 'safe', 'on'=>'search'),
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
			'taxType' => array(self::BELONGS_TO, 'TaxType', 'tax_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'transaction_type' => 'Transaction Type',
			'transaction_no' => 'Transaction No',
			'transaction_date' => 'Transaction Date',
			'tax_type_id' => 'Tax Type',
			'rate' => 'Rate',
			'ex_rate' => 'Ex Rate',
			'included_in_price_status' => 'Included In Price Status',
			'net_amount' => 'Net Amount',
			'amount' => 'Amount',
			'memo' => 'Memo',
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
		$criteria->compare('transaction_type',$this->transaction_type);
		$criteria->compare('transaction_no',$this->transaction_no);
		$criteria->compare('transaction_date',$this->transaction_date,true);
		$criteria->compare('tax_type_id',$this->tax_type_id);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('ex_rate',$this->ex_rate);
		$criteria->compare('included_in_price_status',$this->included_in_price_status);
		$criteria->compare('net_amount',$this->net_amount);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('memo',$this->memo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}