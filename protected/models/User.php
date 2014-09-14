<?php

class User extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_user':
	 * @var integer $id
	 * @var string $user_name
	 * @var string $password
	 * @var string $email
	 * @var string $profile
	 */
	public $password2;
	public $verifyCode;

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
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
		return '{{user}}';
	}

	public function primaryKey()
	{
		return "id";
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		/*return array(
			array('username, password, email', 'required', "message"=>"用户名,密码,邮箱不能为空"),
			array('username, password, email', 'length', 'max'=>128),
			array("password2","compare","compareAttribute"=>"password","message"=>"两次密码不一致"),  
			array("email","email","allowEmpty"=>false,"message"=>"邮箱格式不正确"), 
			array('profile', 'safe'),
			array('sex', 'safe'),
			array('preferer', 'safe'),			
			array('role', 'in', 'range'=>array(1,2,3,4), "message"=>"人物选择错误"),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);*/


		return array(
			array('user_name,password, email', 'required',"message"=>"用户名,密码,邮箱不能为空"),
			array('id, sex, address_id, visit_count, flag', 'numerical', 'integerOnly'=>true),
			array('email, user_name, alias', 'length', 'max'=>60),
			array('password', 'length', 'max'=>32),
			array('user_money, pay_points, rank_points', 'length', 'max'=>10),
			array('last_login', 'length', 'max'=>11),
			array('last_ip', 'length', 'max'=>15),
			array('qq, office_phone, home_phone, mobile_phone', 'length', 'max'=>20),
			array('birthday, last_time', 'safe'),
			array('user_name', 'unique'),
			array('password', 'transferPassword'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, user_name', 'safe', 'on'=>'search'),
		);
	}

	public function transferPassword()
	{
		$password = $this->password;
		$this->password = $this->hashPassword($password);
	}


	/*public function validateName()
	{
		$n=self::model()->count("user_name = :username", array(":username"=>$this->user_name));
		if($n != 0) {
			$this->addError('user_name','用户名重复.'.$this->user_name.$n);
		}		
	}*/


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'posts' => array(self::HAS_MANY, 'Post', 'author_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'user_name' => 'User_name',
			'password' => 'Password',
			'password2' => 'Password2',
			'sex' => 'Sex',
			'email' => 'Email',
			'profile' => 'Profile',
			'verifyCode'=>'Verification Code',
		);
	}

	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return CPasswordHelper::verifyPassword($password,$this->password);
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password)
	{
		return CPasswordHelper::hashPassword($password);
	}

	//beforeSave()这个方法是yii自带的
	public function beforeSave()
	{
		if(parent::beforeSave()){
		    //$this->isNewRecord  是否为新添加用户（新纪录）
			if($this->isNewRecord){
				$this->id = ID_Factory::next_id($this);
				$this->last_login = time();
				$this->last_ip = Yii::app()->request->userHostAddress;
			   // $this->password=$this->hashPassword($this->password);
			}
			return true;
		}else{ 
		    return false;
		}
	}

}
