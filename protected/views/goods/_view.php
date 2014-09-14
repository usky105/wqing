<?php
/* @var $this GoodsController */
/* @var $data Goods */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->goods_id), array('view', 'id'=>$data->goods_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_sn')); ?>:</b>
	<?php echo CHtml::encode($data->goods_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_name')); ?>:</b>
	<?php echo CHtml::encode($data->goods_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_name_style')); ?>:</b>
	<?php echo CHtml::encode($data->goods_name_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_count')); ?>:</b>
	<?php echo CHtml::encode($data->click_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brand_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('provider_name')); ?>:</b>
	<?php echo CHtml::encode($data->provider_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_number')); ?>:</b>
	<?php echo CHtml::encode($data->goods_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_weight')); ?>:</b>
	<?php echo CHtml::encode($data->goods_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('market_price')); ?>:</b>
	<?php echo CHtml::encode($data->market_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_price')); ?>:</b>
	<?php echo CHtml::encode($data->shop_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promote_price')); ?>:</b>
	<?php echo CHtml::encode($data->promote_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promote_start_date')); ?>:</b>
	<?php echo CHtml::encode($data->promote_start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promote_end_date')); ?>:</b>
	<?php echo CHtml::encode($data->promote_end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warn_number')); ?>:</b>
	<?php echo CHtml::encode($data->warn_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
	<?php echo CHtml::encode($data->keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_brief')); ?>:</b>
	<?php echo CHtml::encode($data->goods_brief); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_desc')); ?>:</b>
	<?php echo CHtml::encode($data->goods_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_thumb')); ?>:</b>
	<?php echo CHtml::encode($data->goods_thumb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_img')); ?>:</b>
	<?php echo CHtml::encode($data->goods_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('original_img')); ?>:</b>
	<?php echo CHtml::encode($data->original_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_real')); ?>:</b>
	<?php echo CHtml::encode($data->is_real); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension_code')); ?>:</b>
	<?php echo CHtml::encode($data->extension_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_on_sale')); ?>:</b>
	<?php echo CHtml::encode($data->is_on_sale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_alone_sale')); ?>:</b>
	<?php echo CHtml::encode($data->is_alone_sale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_shipping')); ?>:</b>
	<?php echo CHtml::encode($data->is_shipping); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral')); ?>:</b>
	<?php echo CHtml::encode($data->integral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort_order')); ?>:</b>
	<?php echo CHtml::encode($data->sort_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_delete')); ?>:</b>
	<?php echo CHtml::encode($data->is_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_best')); ?>:</b>
	<?php echo CHtml::encode($data->is_best); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_new')); ?>:</b>
	<?php echo CHtml::encode($data->is_new); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_hot')); ?>:</b>
	<?php echo CHtml::encode($data->is_hot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_promote')); ?>:</b>
	<?php echo CHtml::encode($data->is_promote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_type')); ?>:</b>
	<?php echo CHtml::encode($data->goods_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_note')); ?>:</b>
	<?php echo CHtml::encode($data->seller_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('give_integral')); ?>:</b>
	<?php echo CHtml::encode($data->give_integral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rank_integral')); ?>:</b>
	<?php echo CHtml::encode($data->rank_integral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suppliers_id')); ?>:</b>
	<?php echo CHtml::encode($data->suppliers_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_check')); ?>:</b>
	<?php echo CHtml::encode($data->is_check); ?>
	<br />

	*/ ?>

</div>