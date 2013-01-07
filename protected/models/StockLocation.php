<?php

/**
 * This is the model class for table "stock_location".
 *
 * The followings are the available columns in table 'stock_location':
 * @property integer $id
 * @property integer $location_id
 * @property integer $stock_master_id
 * @property string $reorder_level
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property StockMaster $stockMaster
 */
class StockLocation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockLocation the static model class
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
		return 'stock_location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location_id, stock_master_id, reorder_level', 'required'),
			array('location_id, stock_master_id', 'numerical', 'integerOnly'=>true),
			array('reorder_level', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, location_id, stock_master_id, reorder_level', 'safe', 'on'=>'search'),
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
			'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'location_id' => 'Location',
			'stock_master_id' => 'Stock Master',
			'reorder_level' => 'Reorder Level',
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
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('reorder_level',$this->reorder_level,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}