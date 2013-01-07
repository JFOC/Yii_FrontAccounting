<?php

/**
 * This is the model class for table "sales_pos".
 *
 * The followings are the available columns in table 'sales_pos':
 * @property integer $id
 * @property string $pos_name
 * @property integer $cash_sale_status
 * @property integer $credit_sale_status
 * @property integer $pos_location_id
 * @property integer $pos_account
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property Location $posLocation
 */
class SalesPos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesPos the static model class
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
		return 'sales_pos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pos_name, cash_sale_status, credit_sale_status, pos_location_id, pos_account, active_status', 'required'),
			array('cash_sale_status, credit_sale_status, pos_location_id, pos_account, active_status', 'numerical', 'integerOnly'=>true),
			array('pos_name', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pos_name, cash_sale_status, credit_sale_status, pos_location_id, pos_account, active_status', 'safe', 'on'=>'search'),
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
			'posLocation' => array(self::BELONGS_TO, 'Location', 'pos_location_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pos_name' => 'Pos Name',
			'cash_sale_status' => 'Cash Sale Status',
			'credit_sale_status' => 'Credit Sale Status',
			'pos_location_id' => 'Pos Location',
			'pos_account' => 'Pos Account',
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
		$criteria->compare('pos_name',$this->pos_name,true);
		$criteria->compare('cash_sale_status',$this->cash_sale_status);
		$criteria->compare('credit_sale_status',$this->credit_sale_status);
		$criteria->compare('pos_location_id',$this->pos_location_id);
		$criteria->compare('pos_account',$this->pos_account);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}