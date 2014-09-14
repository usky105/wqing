<?php
/* @var $this GoodsCategoryController */
/* @var $model GoodsCategory */

$this->breadcrumbs=array(
	'Goods Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoodsCategory', 'url'=>array('index')),
	array('label'=>'Manage GoodsCategory', 'url'=>array('admin')),
);
?>

<h1>Create GoodsCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>