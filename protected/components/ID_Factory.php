<?php
/**
 * This class reponsible for generating IDs for other database
 *
 * $Id: ID_Factory.php 329 2014-09-08 03:08:23Z wilson.yu
 *
 * @package    package_name
 * @author     UUTUU Wilson
 * @copyright  (c) 2014 USKY
 */
class ID_Factory {
	

	public static function next_id($name) {
		if ($name instanceof CActiveRecord) {		
			$primaryKey = $name->primaryKey();
			if(empty($primaryKey)) {
				throw new CHttpException(405,'primaryKey is null.');
				
			}

			$name = $name->tablename()."_".$name->primaryKey();	
		}
		else if (!is_string($name) || empty($name))
		{
			throw new CHttpException(405,'Exception '. __CLASS__, __FUNCTION__);
			
		}

		$seq = new Sequences();
		$new_id = $seq->next($name);

		if($new_id == 0) {
			throw new CHttpException(405,'new_id is required '. __CLASS__, __FUNCTION__);		
		}

		return $new_id;
		
	
	}

}
