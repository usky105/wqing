<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $user_id
 * @property string $email
 * @property string $user_name
 * @property string $password
 * @property integer $sex
 * @property string $birthday
 * @property string $user_money
 * @property string $pay_points
 * @property string $rank_points
 * @property integer $address_id
 * @property string $last_login
 * @property string $last_time
 * @property string $last_ip
 * @property integer $visit_count
 * @property integer $flag
 * @property string $alias
 * @property string $qq
 * @property string $office_phone
 * @property string $home_phone
 * @property string $mobile_phone
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, alias, qq, office_phone, home_phone, mobile_phone', 'required'),
			array('user_id, sex, address_id, visit_count, flag', 'numerical', 'integerOnly'=>true),
			array('email, user_name, alias', 'length', 'max'=>60),
			array('password', 'length', 'max'=>32),
			array('user_money, pay_points, rank_points', 'length', 'max'=>10),
			array('last_login', 'length', 'max'=>11),
			array('last_ip', 'length', 'max'=>15),
			array('qq, office_phone, home_phone, mobile_phone', 'length', 'max'=>20),
			array('birthday, last_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, email, user_name, password, sex, birthday, user_money, pay_points, rank_points, address_id, last_login, last_time, last_ip, visit_count, flag, alias, qq, office_phone, home_phone, mobile_phone', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'email' => 'Email',
			'user_name' => 'User Name',
			'password' => 'Password',
			'sex' => 'Sex',
			'birthday' => 'Birthday',
			'user_money' => 'User Money',
			'pay_points' => 'Pay Points',
			'rank_points' => 'Rank Points',
			'address_id' => 'Address',
			'last_login' => 'Last Login',
			'last_time' => 'Last Time',
			'last_ip' => 'Last Ip',
			'visit_count' => 'Visit Count',
			'flag' => 'Flag',
			'alias' => 'Alias',
			'qq' => 'Qq',
			'office_phone' => 'Office Phone',
			'home_phone' => 'Home Phone',
			'mobile_phone' => 'Mobile Phone',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('user_money',$this->user_money,true);
		$criteria->compare('pay_points',$this->pay_points,true);
		$criteria->compare('rank_points',$this->rank_points,true);
		$criteria->compare('address_id',$this->address_id);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('last_time',$this->last_time,true);
		$criteria->compare('last_ip',$this->last_ip,true);
		$criteria->compare('visit_count',$this->visit_count);
		$criteria->compare('flag',$this->flag);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('office_phone',$this->office_phone,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('mobile_phone',$this->mobile_phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
