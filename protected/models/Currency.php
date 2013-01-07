<?php

/**
 * This is the model class for table "currency".
 *
 * The followings are the available columns in table 'currency':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $symbol
 * @property string $country
 * @property string $hundreds_name
 * @property integer $auto_update_status
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property BankAccount[] $bankAccounts
 * @property CustomerHead[] $customerHeads
 * @property ExchangeRate[] $exchangeRates
 * @property SalesPrice[] $salesPrices
 * @property Supplier[] $suppliers
 */
class Currency extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Currency the static model class
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
		return 'currency';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, symbol, country, hundreds_name, auto_update_status, active_status', 'required'),
			array('auto_update_status, active_status', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>3),
			array('name', 'length', 'max'=>60),
			array('symbol', 'length', 'max'=>10),
			array('country', 'length', 'max'=>100),
			array('hundreds_name', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, symbol, country, hundreds_name, auto_update_status, active_status', 'safe', 'on'=>'search'),
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
			'bankAccounts' => array(self::HAS_MANY, 'BankAccount', 'currency_id'),
			'customerHeads' => array(self::HAS_MANY, 'CustomerHead', 'currency_id'),
			'exchangeRates' => array(self::HAS_MANY, 'ExchangeRate', 'currency_id'),
			'salesPrices' => array(self::HAS_MANY, 'SalesPrice', 'currency_id'),
			'suppliers' => array(self::HAS_MANY, 'Supplier', 'currency_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Name',
			'symbol' => 'Symbol',
			'country' => 'Country',
			'hundreds_name' => 'Hundreds Name',
			'auto_update_status' => 'Auto Update Status',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('symbol',$this->symbol,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('hundreds_name',$this->hundreds_name,true);
		$criteria->compare('auto_update_status',$this->auto_update_status);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}