<?php
/* @var $this GoodsController */
/* @var $model Goods */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'goods_id'); ?>
		<?php echo $form->textField($model,'goods_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_sn'); ?>
		<?php echo $form->textField($model,'goods_sn',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_name'); ?>
		<?php echo $form->textField($model,'goods_name',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_name_style'); ?>
		<?php echo $form->textField($model,'goods_name_style',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_count'); ?>
		<?php echo $form->textField($model,'click_count',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brand_id'); ?>
		<?php echo $form->textField($model,'brand_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provider_name'); ?>
		<?php echo $form->textField($model,'provider_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_number'); ?>
		<?php echo $form->textField($model,'goods_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_weight'); ?>
		<?php echo $form->textField($model,'goods_weight',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'market_price'); ?>
		<?php echo $form->textField($model,'market_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_price'); ?>
		<?php echo $form->textField($model,'shop_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promote_price'); ?>
		<?php echo $form->textField($model,'promote_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promote_start_date'); ?>
		<?php echo $form->textField($model,'promote_start_date',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promote_end_date'); ?>
		<?php echo $form->textField($model,'promote_end_date',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warn_number'); ?>
		<?php echo $form->textField($model,'warn_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_brief'); ?>
		<?php echo $form->textField($model,'goods_brief',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_desc'); ?>
		<?php echo $form->textArea($model,'goods_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_thumb'); ?>
		<?php echo $form->textField($model,'goods_thumb',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_img'); ?>
		<?php echo $form->textField($model,'goods_img',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'original_img'); ?>
		<?php echo $form->textField($model,'original_img',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_real'); ?>
		<?php echo $form->textField($model,'is_real'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension_code'); ?>
		<?php echo $form->textField($model,'extension_code',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_on_sale'); ?>
		<?php echo $form->textField($model,'is_on_sale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_alone_sale'); ?>
		<?php echo $form->textField($model,'is_alone_sale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_shipping'); ?>
		<?php echo $form->textField($model,'is_shipping'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'integral'); ?>
		<?php echo $form->textField($model,'integral',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'add_time'); ?>
		<?php echo $form->textField($model,'add_time',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_delete'); ?>
		<?php echo $form->textField($model,'is_delete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_best'); ?>
		<?php echo $form->textField($model,'is_best'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_new'); ?>
		<?php echo $form->textField($model,'is_new'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_hot'); ?>
		<?php echo $form->textField($model,'is_hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_promote'); ?>
		<?php echo $form->textField($model,'is_promote'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_type_id'); ?>
		<?php echo $form->textField($model,'bonus_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_type'); ?>
		<?php echo $form->textField($model,'goods_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_note'); ?>
		<?php echo $form->textField($model,'seller_note',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'give_integral'); ?>
		<?php echo $form->textField($model,'give_integral'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rank_integral'); ?>
		<?php echo $form->textField($model,'rank_integral'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suppliers_id'); ?>
		<?php echo $form->textField($model,'suppliers_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_check'); ?>
		<?php echo $form->textField($model,'is_check'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->