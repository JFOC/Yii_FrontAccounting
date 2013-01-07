<?php

/**
 * This is the model class for table "stock_item".
 *
 * The followings are the available columns in table 'stock_item':
 * @property integer $id
 * @property string $code
 * @property integer $stock_master_id
 * @property string $description
 * @property integer $stock_category_id
 * @property double $quantity
 * @property integer $foreign_status
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property StockCategory $stockCategory
 * @property StockMaster $stockMaster
 */
class StockItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockItem the static model class
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
		return 'stock_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, stock_master_id, description, stock_category_id, quantity, foreign_status, active_status', 'required'),
			array('stock_master_id, stock_category_id, foreign_status, active_status', 'numerical', 'integerOnly'=>true),
			array('quantity', 'numerical'),
			array('code', 'length', 'max'=>20),
			array('description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, stock_master_id, description, stock_category_id, quantity, foreign_status, active_status', 'safe', 'on'=>'search'),
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
			'stockCategory' => array(self::BELONGS_TO, 'StockCategory', 'stock_category_id'),
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
			'code' => 'Code',
			'stock_master_id' => 'Stock Master',
			'description' => 'Description',
			'stock_category_id' => 'Stock Category',
			'quantity' => 'Quantity',
			'foreign_status' => 'Foreign Status',
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
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('stock_category_id',$this->stock_category_id);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('foreign_status',$this->foreign_status);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}