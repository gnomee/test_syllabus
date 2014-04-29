<?php
/* @var $this DersogrciktiController */
/* @var $data Dersogrcikti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersgenelbilgi_id')); ?>:</b>
	<?php echo CHtml::encode($data->dersgenelbilgi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersogrcikti')); ?>:</b>
	<?php echo CHtml::encode($data->dersogrcikti); ?>
	<br />


</div>