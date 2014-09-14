  <ul>
  	<?php  $ac = Yii::app()->getController()->id; ?>
	<li><?php echo CHtml::link('Create New '.$ac,array($ac.'/create')); ?></li>
	<li><?php echo CHtml::link('Manage '.$ac,array($ac.'/admin')); ?></li>
	<li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
</ul>