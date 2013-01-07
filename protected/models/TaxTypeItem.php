<?php

/**
 * This is the model class for table "tax_type_item".
 *
 * The followings are the available columns in table 'tax_type_item':
 * @property integer $id
 * @property string $name
 * @property integer $exemption_status
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property StockCategory[] $stockCategories
 * @property StockMaster[] $stockMasters
 * @property TaxTypeExemptionItem[] $taxTypeExemptionItems
 */
class TaxTypeItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TaxTypeItem the static model class
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
		return 'tax_type_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, exemption_status, active_status', 'required'),
			array('exemption_status, active_status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, exemption_status, active_status', 'safe', 'on'=>'search'),
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
			'stockCategories' => array(self::HAS_MANY, 'StockCategory', 'default_tax_type'),
			'stockMasters' => array(self::HAS_MANY, 'StockMaster', 'tax_type_item_id'),
			'taxTypeExemptionItems' => array(self::HAS_MANY, 'TaxTypeExemptionItem', 'tax_type_item_id'),
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
			'exemption_status' => 'Exemption Status',
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
		$criteria->compare('exemption_status',$this->exemption_status);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}