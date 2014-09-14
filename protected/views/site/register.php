<?php
$this->pageTitle=Yii::app()->name . ' - Register';
$this->breadcrumbs=array(
	'Register',
);
?>

<h1>Register</h1>

<p>Please fill out the following form with your Register credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name'); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password2'); ?>
		<?php echo $form->passwordField($model,'password2'); ?>
		<?php echo $form->error($model,'password2'); ?>		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->radioButton($model,'sex',array('value'=>1, 'uncheckValue'=>null, 'checked' => false )); ?> 男		
		<?php echo $form->radioButton($model,'sex',array('value'=>0, 'uncheckValue'=>null, 'checked' => false  )); ?> 女	
		<?php echo $form->error($model,'sex'); ?>		
	</div>

	<div class="row">  
    <?php echo $form->labelEx($model,'birthday'); ?> 
    <?php  
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(  
        'model'=>$model,  
        'attribute'=>'birthday',  
        'options' => array(  
            'dateFormat'=>'yy-mm-dd', //database save format  
            //'altFormat'=>'mm-dd-yy' //display format  
            //'showAnim'=>'fold',  
            //'yearRange'=>'-3:+3'   
        ),  
        'htmlOptions'=>array(  
            'readonly'=>'readonly',  
            'style'=>'width:90px;',  
        )  
    ));?>  
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>		
	</div>

	<?php if(!CCaptcha::checkRequirements()): ?>
		<div class="row">
			<?php echo $form->labelEx($model,'verifyCode'); ?>
			<div>
				<?php $this->widget('CCaptcha'); ?><br/>
				<?php echo $form->textField($model,'verifyCode'); ?>
			</div>
			<div class="hint">
				Please enter the letters as they are shown in the image above.
				<br/>Letters are not case-sensitive.
			</div>
		</div>
	<?php endif; ?>

	<div class="row submit">
		<?php echo CHtml::submitButton('Register'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
