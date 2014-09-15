<?php
/* @var $this GoodsCategoryController */
/* @var $model GoodsCategory */

$this->breadcrumbs=array(
	'Goods Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GoodsCategory', 'url'=>array('index')),
	array('label'=>'Create GoodsCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#goods-category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Goods Categories</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
<p>
<?php echo $model_type->cat_name; ?>
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'goods-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'category_id',
		'category_name',
		'enabled',
		'type_id',
		array(
			'class'=>'CButtonColumn',
		),
		array(
			'class'=>'CLinkColumn',
			'label'=>'new goods',
			'urlExpression'=>'Yii::app()->createURL("goods/create",array("type_id"=>$data->primaryKey))',		
		),	
		array(
			'class'=>'CLinkColumn',
			'label'=>'view goods',
			'urlExpression'=>'Yii::app()->createURL("goods/admin",array("type_id"=>$data->primaryKey))',		
		),	
	),
)); ?>
