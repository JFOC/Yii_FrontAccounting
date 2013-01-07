<?php

/**
 * This is the model class for table "dimension".
 *
 * The followings are the available columns in table 'dimension':
 * @property integer $id
 * @property string $reference
 * @property string $name
 * @property integer $type_status
 * @property integer $closed_status
 * @property string $date
 * @property string $due_date
 *
 * The followings are the available model relations:
 * @property BankTransaction[] $bankTransactions
 * @property BankTransaction[] $bankTransactions1
 * @property BudgetTransaction[] $budgetTransactions
 * @property BudgetTransaction[] $budgetTransactions1
 * @property CustomerHead[] $customerHeads
 * @property CustomerHead[] $customerHeads1
 * @property CustomerTransaction[] $customerTransactions
 * @property CustomerTransaction[] $customerTransactions1
 * @property DimensionTagAssociation[] $dimensionTagAssociations
 * @property GeneralLedgerTransaction[] $generalLedgerTransactions
 * @property GeneralLedgerTransaction[] $generalLedgerTransactions1
 * @property QuickEntryLine[] $quickEntryLines
 * @property QuickEntryLine[] $quickEntryLines1
 * @property StockCategory[] $stockCategories
 * @property StockMaster[] $stockMasters
 * @property StockMaster[] $stockMasters1
 * @property Supplier[] $suppliers
 * @property Supplier[] $suppliers1
 */
class Dimension extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dimension the static model class
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
		return 'dimension';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reference, name, type_status, closed_status, date, due_date', 'required'),
			array('type_status, closed_status', 'numerical', 'integerOnly'=>true),
			array('reference, name', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, reference, name, type_status, closed_status, date, due_date', 'safe', 'on'=>'search'),
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
			'bankTransactions' => array(self::HAS_MANY, 'BankTransaction', 'dimension1_id'),
			'bankTransactions1' => array(self::HAS_MANY, 'BankTransaction', 'dimension2_id'),
			'budgetTransactions' => array(self::HAS_MANY, 'BudgetTransaction', 'dimension1_id'),
			'budgetTransactions1' => array(self::HAS_MANY, 'BudgetTransaction', 'dimension2_id'),
			'customerHeads' => array(self::HAS_MANY, 'CustomerHead', 'dimension1_id'),
			'customerHeads1' => array(self::HAS_MANY, 'CustomerHead', 'dimension2_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'dimension1_id'),
			'customerTransactions1' => array(self::HAS_MANY, 'CustomerTransaction', 'dimension2_id'),
			'dimensionTagAssociations' => array(self::HAS_MANY, 'DimensionTagAssociation', 'dimension_id'),
			'generalLedgerTransactions' => array(self::HAS_MANY, 'GeneralLedgerTransaction', 'dimension1_id'),
			'generalLedgerTransactions1' => array(self::HAS_MANY, 'GeneralLedgerTransaction', 'dimension2_id'),
			'quickEntryLines' => array(self::HAS_MANY, 'QuickEntryLine', 'dimension1_id'),
			'quickEntryLines1' => array(self::HAS_MANY, 'QuickEntryLine', 'dimension2_id'),
			'stockCategories' => array(self::HAS_MANY, 'StockCategory', 'default_dimension1'),
			'stockMasters' => array(self::HAS_MANY, 'StockMaster', 'dimension1_id'),
			'stockMasters1' => array(self::HAS_MANY, 'StockMaster', 'dimension2_id'),
			'suppliers' => array(self::HAS_MANY, 'Supplier', 'dimension1_id'),
			'suppliers1' => array(self::HAS_MANY, 'Supplier', 'dimension2_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'reference' => 'Reference',
			'name' => 'Name',
			'type_status' => 'Type Status',
			'closed_status' => 'Closed Status',
			'date' => 'Date',
			'due_date' => 'Due Date',
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
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type_status',$this->type_status);
		$criteria->compare('closed_status',$this->closed_status);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('due_date',$this->due_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}