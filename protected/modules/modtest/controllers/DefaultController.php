<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$user = new User;

		$user=User::model()->findByPk(1);

		echo $user->email;

		$this->render('index');
	}
}