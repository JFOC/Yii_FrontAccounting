<?php

/**
 * This is the model class for table "exchange_rate".
 *
 * The followings are the available columns in table 'exchange_rate':
 * @property integer $id
 * @property integer $currency_id
 * @property double $rate_buy
 * @property double $rate_sell
 * @property string $date
 *
 * The followings are the available model relations:
 * @property Currency $currency
 */
class ExchangeRate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExchangeRate the static model class
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
		return 'exchange_rate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('currency_id, rate_buy, rate_sell, date', 'required'),
			array('currency_id', 'numerical', 'integerOnly'=>true),
			array('rate_buy, rate_sell', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, currency_id, rate_buy, rate_sell, date', 'safe', 'on'=>'search'),
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
			'currency' => array(self::BELONGS_TO, 'Currency', 'currency_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'currency_id' => 'Currency',
			'rate_buy' => 'Rate Buy',
			'rate_sell' => 'Rate Sell',
			'date' => 'Date',
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
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('rate_buy',$this->rate_buy);
		$criteria->compare('rate_sell',$this->rate_sell);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}