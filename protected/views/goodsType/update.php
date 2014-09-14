<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */

$this->breadcrumbs=array(
	'Goods Types'=>array('index'),
	$model->cat_id=>array('view','id'=>$model->cat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsType', 'url'=>array('index')),
	array('label'=>'Create GoodsType', 'url'=>array('create')),
	array('label'=>'View GoodsType', 'url'=>array('view', 'id'=>$model->cat_id)),
	array('label'=>'Manage GoodsType', 'url'=>array('admin')),
);
?>

<h1>Update GoodsType <?php echo $model->cat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>