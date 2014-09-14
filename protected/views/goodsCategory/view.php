<?php
/* @var $this GoodsCategoryController */
/* @var $model GoodsCategory */

$this->breadcrumbs=array(
	'Goods Categories'=>array('index'),
	$model->category_id,
);

$this->menu=array(
	array('label'=>'List GoodsCategory', 'url'=>array('index')),
	array('label'=>'Create GoodsCategory', 'url'=>array('create')),
	array('label'=>'Update GoodsCategory', 'url'=>array('update', 'id'=>$model->category_id)),
	array('label'=>'Delete GoodsCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsCategory', 'url'=>array('admin')),
);
?>

<h1>View GoodsCategory #<?php echo $model->category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category_id',
		'category_name',
		'enabled',
		'type_id',
	),
)); ?>
