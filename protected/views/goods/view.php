<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Goods'=>array('index'),
	$model->goods_id,
);

$this->menu=array(
	array('label'=>'List Goods', 'url'=>array('index')),
	array('label'=>'Create Goods', 'url'=>array('create')),
	array('label'=>'Update Goods', 'url'=>array('update', 'id'=>$model->goods_id)),
	array('label'=>'Delete Goods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->goods_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Goods', 'url'=>array('admin')),
);
?>

<h1>View Goods #<?php echo $model->goods_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'goods_id',
		'cat_id',
		'goods_sn',
		'goods_name',
		'goods_name_style',
		'click_count',
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
	),
)); ?>
