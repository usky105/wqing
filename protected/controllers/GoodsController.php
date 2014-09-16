<?php

class GoodsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Goods;

		$cat_id = Yii::app()->request->getParam("cat_id");
		
		if(is_null($cat_id)) {
			echo "ERROR";
		}


		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Goods']))
		{
			$model->attributes=$_POST['Goods'];
			$model->cat_id = $cat_id;

			$model->goods_img=CUploadedFile::getInstance($model,'goods_img');
      		$model->goods_thumb=CUploadedFile::getInstance($model,'goods_thumb');

      		if($model->goods_img)
		    {
		        $newimg = 'imgpath_'.time().'_'.rand(1, 9999).'.'.$model->goods_img->extensionName;
		        //根据时间戳重命名文件名,extensionName是获取文件的扩展名
		        $model->goods_img->saveAs('assets/uploads/slide/'.$newimg);
		        $model->goods_img = 'assets/uploads/slide/'.$newimg;
		        //将image属性重新命名
		    }
		    if($model->goods_thumb)
		    {
		        $newthumb = 'thumb_'.time().'_'.rand(1, 9999).'.'.$model->goods_thumb->extensionName;
		        $model->goods_thumb->saveAs('assets/uploads/slide/'.$newthumb);
		        $model->goods_thumb = 'assets/uploads/slide/'.$newthumb;
		    }





			if($model->save())
				$this->redirect(array('view','id'=>$model->goods_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Goods']))
		{
			$model->attributes=$_POST['Goods'];

			 $model->goods_img=CUploadedFile::getInstance($model,'goods_img');
		      $model->goods_thumb=CUploadedFile::getInstance($model,'goods_thumb');
		      if($model->goods_img)
		      {
		        $newimg = 'imgpath_'.time().'_'.rand(1, 9999).'.'.$model->goods_img->extensionName;
		        //根据时间戳重命名文件名,extensionName是获取文件的扩展名
		        $model->goods_img->saveAs('assets/uploads/slide/'.$newimg);
		        $model->goods_img = 'assets/uploads/slide/'.$newimg;
		        //将image属性重新命名
		      } else {		      	
		        $model->goods_img = $_POST['goods_img2'];
		      }
		      if($model->goods_thumb)
		      {
		        $newthumb = 'thumb_'.time().'_'.rand(1, 9999).'.'.$model->goods_thumb->extensionName;
		        $model->goods_thumb->saveAs('assets/uploads/slide/'.$newthumb);
		        $model->goods_thumb = 'assets/uploads/slide/'.$newthumb;
		      } else {
		        $model->goods_thumb = $_POST['goods_thumb2'];
		      }


			if($model->save())
				$this->redirect(array('view','id'=>$model->goods_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Goods');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Goods('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Goods']))
			$model->attributes=$_GET['Goods'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Goods the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Goods::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Goods $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='goods-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
