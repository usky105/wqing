<?php
/* @var $this GoodsCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Goods Categories',
);

$this->menu=array(
	array('label'=>'Create GoodsCategory', 'url'=>array('create')),
	array('label'=>'Manage GoodsCategory', 'url'=>array('admin')),
);
?>

<h1>Goods Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
