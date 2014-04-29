<?php
/* @var $this DersgenelbilgiController */
/* @var $data Dersgenelbilgi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mainders_id')); ?>:</b>
	<?php echo CHtml::encode($data->mainders_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersveren')); ?>:</b>
	<?php echo CHtml::encode($data->dersveren); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersdili')); ?>:</b>
	<?php echo CHtml::encode($data->dersdili); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yardimcilar')); ?>:</b>
	<?php echo CHtml::encode($data->yardimcilar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('derslik')); ?>:</b>
	<?php echo CHtml::encode($data->derslik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amaci')); ?>:</b>
	<?php echo CHtml::encode($data->amaci); ?>
	<br />


</div>