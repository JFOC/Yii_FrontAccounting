<?php

/**
 * This is the model class for table "location".
 *
 * The followings are the available columns in table 'location':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $delivery_address
 * @property string $phone1
 * @property string $phone2
 * @property string $fax
 * @property string $email
 * @property string $contact
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property BillOfMaterial[] $billOfMaterials
 * @property CustomerBranch[] $customerBranches
 * @property GrnBatch[] $grnBatches
 * @property PurchaseOrder[] $purchaseOrders
 * @property SalesOrder[] $salesOrders
 * @property SalesPos[] $salesPoses
 * @property StockLocation[] $stockLocations
 * @property StockMove[] $stockMoves
 * @property Workorder[] $workorders
 * @property WorkorderIssue[] $workorderIssues
 * @property WorkorderRequirement[] $workorderRequirements
 */
class Location extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Location the static model class
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
		return 'location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, active_status', 'required'),
			array('active_status', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>5),
			array('name', 'length', 'max'=>60),
			array('phone1, phone2, fax, contact', 'length', 'max'=>30),
			array('email', 'length', 'max'=>100),
			array('delivery_address', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, delivery_address, phone1, phone2, fax, email, contact, active_status', 'safe', 'on'=>'search'),
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
			'billOfMaterials' => array(self::HAS_MANY, 'BillOfMaterial', 'location_id'),
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'default_location_id'),
			'grnBatches' => array(self::HAS_MANY, 'GrnBatch', 'location_id'),
			'purchaseOrders' => array(self::HAS_MANY, 'PurchaseOrder', 'into_stock_location_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'from_stock_location_id'),
			'salesPoses' => array(self::HAS_MANY, 'SalesPos', 'pos_location_id'),
			'stockLocations' => array(self::HAS_MANY, 'StockLocation', 'location_id'),
			'stockMoves' => array(self::HAS_MANY, 'StockMove', 'location_id'),
			'workorders' => array(self::HAS_MANY, 'Workorder', 'location_id'),
			'workorderIssues' => array(self::HAS_MANY, 'WorkorderIssue', 'location_id'),
			'workorderRequirements' => array(self::HAS_MANY, 'WorkorderRequirement', 'location_id'),
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
			'name' => 'Name',
			'delivery_address' => 'Delivery Address',
			'phone1' => 'Phone1',
			'phone2' => 'Phone2',
			'fax' => 'Fax',
			'email' => 'Email',
			'contact' => 'Contact',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('delivery_address',$this->delivery_address,true);
		$criteria->compare('phone1',$this->phone1,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}