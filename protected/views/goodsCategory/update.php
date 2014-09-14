<?php
/* @var $this GoodsCategoryController */
/* @var $model GoodsCategory */

$this->breadcrumbs=array(
	'Goods Categories'=>array('index'),
	$model->category_id=>array('view','id'=>$model->category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsCategory', 'url'=>array('index')),
	array('label'=>'Create GoodsCategory', 'url'=>array('create')),
	array('label'=>'View GoodsCategory', 'url'=>array('view', 'id'=>$model->category_id)),
	array('label'=>'Manage GoodsCategory', 'url'=>array('admin')),
);
?>

<h1>Update GoodsCategory <?php echo $model->category_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>