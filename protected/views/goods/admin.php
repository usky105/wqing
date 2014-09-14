<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Goods'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Goods', 'url'=>array('index')),
	array('label'=>'Create Goods', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#goods-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Goods</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'goods-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'goods_id',
		'cat_id',
		'goods_sn',
		'goods_name',
		'goods_name_style',
		'click_count',
		/*
		'brand_id',
		'provider_name',
		'goods_number',
		'goods_weight',
		'market_price',
		'shop_price',
		'promote_price',
		'promote_start_date',
		'promote_end_date',
		'warn_number',
		'keywords',
		'goods_brief',
		'goods_desc',
		'goods_thumb',
		'goods_img',
		'original_img',
		'is_real',
		'extension_code',
		'is_on_sale',
		'is_alone_sale',
		'is_shipping',
		'integral',
		'add_time',
		'sort_order',
		'is_delete',
		'is_best',
		'is_new',
		'is_hot',
		'is_promote',
		'bonus_type_id',
		'last_update',
		'goods_type',
		'seller_note',
		'give_integral',
		'rank_integral',
		'suppliers_id',
		'is_check',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
