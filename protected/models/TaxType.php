<?php

/**
 * This is the model class for table "tax_type".
 *
 * The followings are the available columns in table 'tax_type':
 * @property integer $id
 * @property string $name
 * @property double $rate
 * @property integer $sales_account_id
 * @property integer $purchasing_account_id
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property TaxGroupItem[] $taxGroupItems
 * @property TaxTransactionItem[] $taxTransactionItems
 * @property GeneralLedgerAccount $salesAccount
 * @property GeneralLedgerAccount $purchasingAccount
 * @property TaxTypeExemptionItem[] $taxTypeExemptionItems
 */
class TaxType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TaxType the static model class
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
		return 'tax_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, rate, sales_account_id, purchasing_account_id, active_status', 'required'),
			array('sales_account_id, purchasing_account_id, active_status', 'numerical', 'integerOnly'=>true),
			array('rate', 'numerical'),
			array('name', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, rate, sales_account_id, purchasing_account_id, active_status', 'safe', 'on'=>'search'),
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
			'taxGroupItems' => array(self::HAS_MANY, 'TaxGroupItem', 'tax_type_id'),
			'taxTransactionItems' => array(self::HAS_MANY, 'TaxTransactionItem', 'tax_type_id'),
			'salesAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'sales_account_id'),
			'purchasingAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'purchasing_account_id'),
			'taxTypeExemptionItems' => array(self::HAS_MANY, 'TaxTypeExemptionItem', 'tax_type_id'),
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
			'rate' => 'Rate',
			'sales_account_id' => 'Sales Account',
			'purchasing_account_id' => 'Purchasing Account',
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
		$criteria->compare('rate',$this->rate);
		$criteria->compare('sales_account_id',$this->sales_account_id);
		$criteria->compare('purchasing_account_id',$this->purchasing_account_id);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}