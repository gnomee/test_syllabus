<?php
/* @var $this UnvanController */
/* @var $data Unvan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unvan')); ?>:</b>
	<?php echo CHtml::encode($data->Unvan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kg')); ?>:</b>
	<?php echo CHtml::encode($data->kg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en')); ?>:</b>
	<?php echo CHtml::encode($data->en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tr')); ?>:</b>
	<?php echo CHtml::encode($data->tr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru')); ?>:</b>
	<?php echo CHtml::encode($data->ru); ?>
	<br />


</div>