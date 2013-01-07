<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $real_name
 * @property integer $role_id
 * @property string $phone
 * @property string $email
 * @property string $language
 * @property integer $display_date_format_id
 * @property integer $display_date_separator_id
 * @property integer $display_thousand_separator_id
 * @property integer $display_decimal_separator_id
 * @property string $theme
 * @property string $page_size
 * @property integer $price_decimal
 * @property integer $quantity_decimal
 * @property integer $rate_decimal
 * @property integer $percent_decimal
 * @property integer $show_general_ledger_status
 * @property integer $show_code_status
 * @property integer $show_hints_status
 * @property string $last_visit_date
 * @property integer $query_size
 * @property integer $pos
 * @property string $print_profile
 * @property integer $graphic_link_status
 * @property integer $popup_report_window_status
 * @property integer $remember_document_date_status
 * @property integer $display_startup_tab_id
 * @property integer $active_status
 *
 * The followings are the available model relations:
 * @property AuditTrail[] $auditTrails
 * @property DisplayDateFormat $displayDateFormat
 * @property DisplayDateSeparator $displayDateSeparator
 * @property DisplayDecimalSeparator $displayDecimalSeparator
 * @property DisplayStartupTab $displayStartupTab
 * @property DisplayThousandSeparator $displayThousandSeparator
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, real_name, role_id, phone, display_date_format_id, display_date_separator_id, display_thousand_separator_id, display_decimal_separator_id, theme, page_size, price_decimal, quantity_decimal, rate_decimal, percent_decimal, show_general_ledger_status, show_code_status, show_hints_status, print_profile, graphic_link_status, popup_report_window_status, remember_document_date_status, display_startup_tab_id, active_status', 'required'),
			array('role_id, display_date_format_id, display_date_separator_id, display_thousand_separator_id, display_decimal_separator_id, price_decimal, quantity_decimal, rate_decimal, percent_decimal, show_general_ledger_status, show_code_status, show_hints_status, query_size, pos, graphic_link_status, popup_report_window_status, remember_document_date_status, display_startup_tab_id, active_status', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>60),
			array('password, real_name, email', 'length', 'max'=>100),
			array('phone, print_profile', 'length', 'max'=>30),
			array('language, theme, page_size', 'length', 'max'=>20),
			array('last_visit_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, real_name, role_id, phone, email, language, display_date_format_id, display_date_separator_id, display_thousand_separator_id, display_decimal_separator_id, theme, page_size, price_decimal, quantity_decimal, rate_decimal, percent_decimal, show_general_ledger_status, show_code_status, show_hints_status, last_visit_date, query_size, pos, print_profile, graphic_link_status, popup_report_window_status, remember_document_date_status, display_startup_tab_id, active_status', 'safe', 'on'=>'search'),
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
			'auditTrails' => array(self::HAS_MANY, 'AuditTrail', 'user_id'),
			'displayDateFormat' => array(self::BELONGS_TO, 'DisplayDateFormat', 'display_date_format_id'),
			'displayDateSeparator' => array(self::BELONGS_TO, 'DisplayDateSeparator', 'display_date_separator_id'),
			'displayDecimalSeparator' => array(self::BELONGS_TO, 'DisplayDecimalSeparator', 'display_decimal_separator_id'),
			'displayStartupTab' => array(self::BELONGS_TO, 'DisplayStartupTab', 'display_startup_tab_id'),
			'displayThousandSeparator' => array(self::BELONGS_TO, 'DisplayThousandSeparator', 'display_thousand_separator_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'real_name' => 'Real Name',
			'role_id' => 'Role',
			'phone' => 'Phone',
			'email' => 'Email',
			'language' => 'Language',
			'display_date_format_id' => 'Display Date Format',
			'display_date_separator_id' => 'Display Date Separator',
			'display_thousand_separator_id' => 'Display Thousand Separator',
			'display_decimal_separator_id' => 'Display Decimal Separator',
			'theme' => 'Theme',
			'page_size' => 'Page Size',
			'price_decimal' => 'Price Decimal',
			'quantity_decimal' => 'Quantity Decimal',
			'rate_decimal' => 'Rate Decimal',
			'percent_decimal' => 'Percent Decimal',
			'show_general_ledger_status' => 'Show General Ledger Status',
			'show_code_status' => 'Show Code Status',
			'show_hints_status' => 'Show Hints Status',
			'last_visit_date' => 'Last Visit Date',
			'query_size' => 'Query Size',
			'pos' => 'Pos',
			'print_profile' => 'Print Profile',
			'graphic_link_status' => 'Graphic Link Status',
			'popup_report_window_status' => 'Popup Report Window Status',
			'remember_document_date_status' => 'Remember Document Date Status',
			'display_startup_tab_id' => 'Display Startup Tab',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('real_name',$this->real_name,true);
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('display_date_format_id',$this->display_date_format_id);
		$criteria->compare('display_date_separator_id',$this->display_date_separator_id);
		$criteria->compare('display_thousand_separator_id',$this->display_thousand_separator_id);
		$criteria->compare('display_decimal_separator_id',$this->display_decimal_separator_id);
		$criteria->compare('theme',$this->theme,true);
		$criteria->compare('page_size',$this->page_size,true);
		$criteria->compare('price_decimal',$this->price_decimal);
		$criteria->compare('quantity_decimal',$this->quantity_decimal);
		$criteria->compare('rate_decimal',$this->rate_decimal);
		$criteria->compare('percent_decimal',$this->percent_decimal);
		$criteria->compare('show_general_ledger_status',$this->show_general_ledger_status);
		$criteria->compare('show_code_status',$this->show_code_status);
		$criteria->compare('show_hints_status',$this->show_hints_status);
		$criteria->compare('last_visit_date',$this->last_visit_date,true);
		$criteria->compare('query_size',$this->query_size);
		$criteria->compare('pos',$this->pos);
		$criteria->compare('print_profile',$this->print_profile,true);
		$criteria->compare('graphic_link_status',$this->graphic_link_status);
		$criteria->compare('popup_report_window_status',$this->popup_report_window_status);
		$criteria->compare('remember_document_date_status',$this->remember_document_date_status);
		$criteria->compare('display_startup_tab_id',$this->display_startup_tab_id);
		$criteria->compare('active_status',$this->active_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}