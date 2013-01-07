<?php

/**
 * This is the model class for table "bill_of_material".
 *
 * The followings are the available columns in table 'bill_of_material':
 * @property integer $id
 * @property string $parent
 * @property integer $component
 * @property integer $workcenter_added
 * @property integer $location_id
 * @property double $quantity
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property StockMaster $component0
 * @property Workcenter $workcenterAdded
 */
class BillOfMaterial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BillOfMaterial the static model class
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
		return 'bill_of_material';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent, component, workcenter_added, location_id, quantity', 'required'),
			array('component, workcenter_added, location_id', 'numerical', 'integerOnly'=>true),
			array('quantity', 'numerical'),
			array('parent', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent, component, workcenter_added, location_id, quantity', 'safe', 'on'=>'search'),
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
			'component0' => array(self::BELONGS_TO, 'StockMaster', 'component'),
			'workcenterAdded' => array(self::BELONGS_TO, 'Workcenter', 'workcenter_added'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent' => 'Parent',
			'component' => 'Component',
			'workcenter_added' => 'Workcenter Added',
			'location_id' => 'Location',
			'quantity' => 'Quantity',
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
		$criteria->compare('parent',$this->parent,true);
		$criteria->compare('component',$this->component);
		$criteria->compare('workcenter_added',$this->workcenter_added);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('quantity',$this->quantity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}