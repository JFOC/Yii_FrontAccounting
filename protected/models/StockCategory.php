<?php

/**
 * This is the model class for table "stock_category".
 *
 * The followings are the available columns in table 'stock_category':
 * @property integer $id
 * @property string $name
 * @property integer $default_tax_type
 * @property integer $default_measure_unit_id
 * @property integer $default_mb
 * @property integer $default_sales_account_id
 * @property integer $default_cogs_account_id
 * @property integer $default_inventory_account_id
 * @property integer $default_adjustment_account_id
 * @property integer $default_assembly_account_id
 * @property integer $default_dimension1
 * @property integer $default_dimension2
 * @property integer $default_no_sale_status
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property Dimension $defaultDimension1
 * @property GeneralLedgerAccount $defaultSalesAccount
 * @property GeneralLedgerAccount $defaultCogsAccount
 * @property GeneralLedgerAccount $defaultInventoryAccount
 * @property GeneralLedgerAccount $defaultAdjustmentAccount
 * @property GeneralLedgerAccount $defaultAssemblyAccount
 * @property MeasureUnit $defaultMeasureUnit
 * @property StockType $defaultMb
 * @property TaxTypeItem $defaultTaxType
 * @property StockItem[] $stockItems
 * @property StockMaster[] $stockMasters
 */
class StockCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockCategory the static model class
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
		return 'stock_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, default_tax_type, default_measure_unit_id, default_mb, default_sales_account_id, default_cogs_account_id, default_inventory_account_id, default_adjustment_account_id, default_assembly_account_id, default_no_sale_status, active_status', 'required'),
			array('default_tax_type, default_measure_unit_id, default_mb, default_sales_account_id, default_cogs_account_id, default_inventory_account_id, default_adjustment_account_id, default_assembly_account_id, default_dimension1, default_dimension2, default_no_sale_status, active_status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, default_tax_type, default_measure_unit_id, default_mb, default_sales_account_id, default_cogs_account_id, default_inventory_account_id, default_adjustment_account_id, default_assembly_account_id, default_dimension1, default_dimension2, default_no_sale_status, active_status', 'safe', 'on'=>'search'),
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
			'defaultDimension1' => array(self::BELONGS_TO, 'Dimension', 'default_dimension1'),
			'defaultSalesAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'default_sales_account_id'),
			'defaultCogsAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'default_cogs_account_id'),
			'defaultInventoryAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'default_inventory_account_id'),
			'defaultAdjustmentAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'default_adjustment_account_id'),
			'defaultAssemblyAccount' => array(self::BELONGS_TO, 'GeneralLedgerAccount', 'default_assembly_account_id'),
			'defaultMeasureUnit' => array(self::BELONGS_TO, 'MeasureUnit', 'default_measure_unit_id'),
			'defaultMb' => array(self::BELONGS_TO, 'StockType', 'default_mb'),
			'defaultTaxType' => array(self::BELONGS_TO, 'TaxTypeItem', 'default_tax_type'),
			'stockItems' => array(self::HAS_MANY, 'StockItem', 'stock_category_id'),
			'stockMasters' => array(self::HAS_MANY, 'StockMaster', 'stock_category_id'),
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
			'default_tax_type' => 'Default Tax Type',
			'default_measure_unit_id' => 'Default Measure Unit',
			'default_mb' => 'Default Mb',
			'default_sales_account_id' => 'Default Sales Account',
			'default_cogs_account_id' => 'Default Cogs Account',
			'default_inventory_account_id' => 'Default Inventory Account',
			'default_adjustment_account_id' => 'Default Adjustment Account',
			'default_assembly_account_id' => 'Default Assembly Account',
			'default_dimension1' => 'Default Dimension1',
			'default_dimension2' => 'Default Dimension2',
			'default_no_sale_status' => 'Default No Sale Status',
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
		$criteria->compare('default_tax_type',$this->default_tax_type);
		$criteria->compare('default_measure_unit_id',$this->default_measure_unit_id);
		$criteria->compare('default_mb',$this->default_mb);
		$criteria->compare('default_sales_account_id',$this->default_sales_account_id);
		$criteria->compare('default_cogs_account_id',$this->default_cogs_account_id);
		$criteria->compare('default_inventory_account_id',$this->default_inventory_account_id);
		$criteria->compare('default_adjustment_account_id',$this->default_adjustment_account_id);
		$criteria->compare('default_assembly_account_id',$this->default_assembly_account_id);
		$criteria->compare('default_dimension1',$this->default_dimension1);
		$criteria->compare('default_dimension2',$this->default_dimension2);
		$criteria->compare('default_no_sale_status',$this->default_no_sale_status);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}