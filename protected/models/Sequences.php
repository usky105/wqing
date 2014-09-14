<?php

class Sequences extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_sequences':
	 * @var string $name
	 * @var integer $id
	 * @var integer $timestamp	
	 */

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
		return '{{sequences}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>100),		
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
		);
	}

	//beforeSave()这个方法是yii自带的
	public function beforeSave()
	{
		if(parent::beforeSave()){
		   
			return true;
		}else{ 
		    return false;
		}
	}

	public function next($name) 
	{
		$ts = time();
		$model=self::model();
		$table_name = self::tablename();
		try {
			$transaction = $model->dbConnection->beginTransaction(); 			
			$sql = "UPDATE $table_name SET id = id + 1, timestamp = ".$ts." WHERE name = '".$name."'";
			
			$connection=Yii::app()->db;
			$command=$connection->createCommand($sql);		
			$rowCount = $command->execute();
			if ($rowCount == 0)
			{
				try
				{
					$this->add($name);					
				}
				catch (Exception $ex)
				{
					throw $ex;
				}
			} 

			$transaction->commit();
			return $this->readId($name);			
		} 
		catch (Exception $ex)	
		{
			$transaction->rollBack();
			throw $ex;
		}
	}

	public function add($name) {
		$ts = time();
		$connection=Yii::app()->db;
		$sql="INSERT INTO ".$this->tableName()." (name, id, timestamp) VALUES('".$name."',1,:timestamp)";
		$command=$connection->createCommand($sql);
		$command->bindParam(":timestamp",$ts,PDO::PARAM_STR);
		$command->execute();	
	}

	public function readId($name) {
		try
		{
			$connection=Yii::app()->db;
			$sql="SELECT * FROM ".$this->tableName()." WHERE name = '".$name."'";
			$dataReader=$connection->createCommand($sql)->query();
			if(($row=$dataReader->read())!==false)
			{		
			    return $row['id'];
			} else {
				return 0;
			}
		}
		catch (Exception $ex)
		{			
			throw $ex;
		}		
	}
}
