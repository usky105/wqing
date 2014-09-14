<?php
/* @var $this GoodsTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Goods Types',
);

$this->menu=array(
	array('label'=>'Create GoodsType', 'url'=>array('create')),
	array('label'=>'Manage GoodsType', 'url'=>array('admin')),
);
?>

<h1>Goods Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
