<?php
/* @var $this GoodsController */
/* @var $model Goods */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'goods_sn'); ?>
		<?php echo $form->textField($model,'goods_sn',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'goods_sn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_name'); ?>
		<?php echo $form->textField($model,'goods_name',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'goods_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_name_style'); ?>
		<?php echo $form->textField($model,'goods_name_style',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'goods_name_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_count'); ?>
		<?php echo $form->textField($model,'click_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'click_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brand_id'); ?>
		<?php echo $form->textField($model,'brand_id'); ?>
		<?php echo $form->error($model,'brand_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provider_name'); ?>
		<?php echo $form->textField($model,'provider_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'provider_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_number'); ?>
		<?php echo $form->textField($model,'goods_number'); ?>
		<?php echo $form->error($model,'goods_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_weight'); ?>
		<?php echo $form->textField($model,'goods_weight',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'goods_weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'market_price'); ?>
		<?php echo $form->textField($model,'market_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'market_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_price'); ?>
		<?php echo $form->textField($model,'shop_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'shop_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promote_price'); ?>
		<?php echo $form->textField($model,'promote_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'promote_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promote_start_date'); ?>
		<?php echo $form->textField($model,'promote_start_date',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'promote_start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promote_end_date'); ?>
		<?php echo $form->textField($model,'promote_end_date',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'promote_end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warn_number'); ?>
		<?php echo $form->textField($model,'warn_number'); ?>
		<?php echo $form->error($model,'warn_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_brief'); ?>
		<?php echo $form->textField($model,'goods_brief',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'goods_brief'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_desc'); ?>
		<?php echo $form->textArea($model,'goods_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'goods_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_thumb'); ?>
		<?php echo $form->fileField($model,'goods_thumb',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'goods_thumb'); ?>


        <?php if(!$model->isNewRecord){?>
        <?php echo CHtml::image(Yii::app()->baseUrl."/".$model->goods_thumb,$model->goods_name,array("width"=>55,"height"=>30)); ?>
        <input type="hidden" name="goods_thumb2" id="hiddenField"    value="<?php echo $model->goods_thumb;?>"/>
        <?php }?>


	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_img'); ?>
		<?php echo $form->fileField($model,'goods_img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'goods_img'); ?>

		<?php if(!$model->isNewRecord){?>
        <?php echo CHtml::image(Yii::app()->baseUrl."/".$model->goods_img,$model->goods_name,array("width"=>220,"height"=>150)); ?>
        <input type="hidden" name="goods_img2" id="hiddenField"    value="<?php echo $model->goods_img;?>"/>
        <?php }?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_img'); ?>
		<?php echo $form->textField($model,'original_img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'original_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_real'); ?>
		<?php echo $form->textField($model,'is_real'); ?>
		<?php echo $form->error($model,'is_real'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension_code'); ?>
		<?php echo $form->textField($model,'extension_code',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'extension_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_on_sale'); ?>
		<?php echo $form->textField($model,'is_on_sale'); ?>
		<?php echo $form->error($model,'is_on_sale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_alone_sale'); ?>
		<?php echo $form->textField($model,'is_alone_sale'); ?>
		<?php echo $form->error($model,'is_alone_sale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_shipping'); ?>
		<?php echo $form->textField($model,'is_shipping'); ?>
		<?php echo $form->error($model,'is_shipping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'integral'); ?>
		<?php echo $form->textField($model,'integral',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'integral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_time'); ?>
		<?php echo $form->textField($model,'add_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'add_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order'); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_delete'); ?>
		<?php echo $form->textField($model,'is_delete'); ?>
		<?php echo $form->error($model,'is_delete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_best'); ?>
		<?php echo $form->textField($model,'is_best'); ?>
		<?php echo $form->error($model,'is_best'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_new'); ?>
		<?php echo $form->textField($model,'is_new'); ?>
		<?php echo $form->error($model,'is_new'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_hot'); ?>
		<?php echo $form->textField($model,'is_hot'); ?>
		<?php echo $form->error($model,'is_hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_promote'); ?>
		<?php echo $form->textField($model,'is_promote'); ?>
		<?php echo $form->error($model,'is_promote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus_type_id'); ?>
		<?php echo $form->textField($model,'bonus_type_id'); ?>
		<?php echo $form->error($model,'bonus_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_type'); ?>
		<?php echo $form->textField($model,'goods_type'); ?>
		<?php echo $form->error($model,'goods_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_note'); ?>
		<?php echo $form->textField($model,'seller_note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seller_note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'give_integral'); ?>
		<?php echo $form->textField($model,'give_integral'); ?>
		<?php echo $form->error($model,'give_integral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rank_integral'); ?>
		<?php echo $form->textField($model,'rank_integral'); ?>
		<?php echo $form->error($model,'rank_integral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suppliers_id'); ?>
		<?php echo $form->textField($model,'suppliers_id'); ?>
		<?php echo $form->error($model,'suppliers_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_check'); ?>
		<?php echo $form->textField($model,'is_check'); ?>
		<?php echo $form->error($model,'is_check'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->