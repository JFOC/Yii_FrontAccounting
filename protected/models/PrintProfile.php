<?php

/**
 * This is the model class for table "print_profile".
 *
 * The followings are the available columns in table 'print_profile':
 * @property integer $id
 * @property integer $printer_id
 * @property string $profile
 * @property string $report
 *
 * The followings are the available model relations:
 * @property Printer $printer
 */
class PrintProfile extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PrintProfile the static model class
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
		return 'print_profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('printer_id, profile', 'required'),
			array('printer_id', 'numerical', 'integerOnly'=>true),
			array('profile', 'length', 'max'=>30),
			array('report', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, printer_id, profile, report', 'safe', 'on'=>'search'),
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
			'printer' => array(self::BELONGS_TO, 'Printer', 'printer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'printer_id' => 'Printer',
			'profile' => 'Profile',
			'report' => 'Report',
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
		$criteria->compare('printer_id',$this->printer_id);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('report',$this->report,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}