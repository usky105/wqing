<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */

$this->breadcrumbs=array(
	'Goods Types'=>array('index'),
	$model->cat_id,
);

$this->menu=array(
	array('label'=>'List GoodsType', 'url'=>array('index')),
	array('label'=>'Create GoodsType', 'url'=>array('create')),
	array('label'=>'Update GoodsType', 'url'=>array('update', 'id'=>$model->cat_id)),
	array('label'=>'Delete GoodsType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsType', 'url'=>array('admin')),
);
?>

<h1>View GoodsType #<?php echo $model->cat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cat_id',
		'cat_name',
		'enabled',
		'attr_group',
	),
)); ?>
