<?php

/**
 * This is the model class for table "tax_group_item".
 *
 * The followings are the available columns in table 'tax_group_item':
 * @property integer $id
 * @property integer $tax_group_id
 * @property integer $tax_type_id
 * @property double $rate
 *
 * The followings are the available model relations:
 * @property TaxGroup $taxGroup
 * @property TaxType $taxType
 */
class TaxGroupItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TaxGroupItem the static model class
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
		return 'tax_group_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tax_group_id, tax_type_id, rate', 'required'),
			array('tax_group_id, tax_type_id', 'numerical', 'integerOnly'=>true),
			array('rate', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tax_group_id, tax_type_id, rate', 'safe', 'on'=>'search'),
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
			'taxGroup' => array(self::BELONGS_TO, 'TaxGroup', 'tax_group_id'),
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
			'tax_group_id' => 'Tax Group',
			'tax_type_id' => 'Tax Type',
			'rate' => 'Rate',
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
		$criteria->compare('tax_group_id',$this->tax_group_id);
		$criteria->compare('tax_type_id',$this->tax_type_id);
		$criteria->compare('rate',$this->rate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}