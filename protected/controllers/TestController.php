<?php

class TestController extends Controller
{
	public function actionAction1()
	{
		$this->render('action1');
	}

	public function actionAction2()
	{
		$this->render('action2');
	}

	public function actionAction3()
	{
		$this->render('action3');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}