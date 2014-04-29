<?php
/* @var $this DegaraciController */
/* @var $data Degaraci */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degaraci')); ?>:</b>
	<?php echo CHtml::encode($data->degaraci); ?>
	<br />


</div>