<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */

$this->breadcrumbs=array(
	'Goods Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoodsType', 'url'=>array('index')),
	array('label'=>'Manage GoodsType', 'url'=>array('admin')),
);
?>

<h1>Create GoodsType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>