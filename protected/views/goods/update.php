<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Goods'=>array('index'),
	$model->goods_id=>array('view','id'=>$model->goods_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Goods', 'url'=>array('index')),
	array('label'=>'Create Goods', 'url'=>array('create')),
	array('label'=>'View Goods', 'url'=>array('view', 'id'=>$model->goods_id)),
	array('label'=>'Manage Goods', 'url'=>array('admin')),
);
?>

<h1>Update Goods <?php echo $model->goods_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>