<?php
/* @var $this IsyukuController */
/* @var $data Isyuku */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degeraraci_id')); ?>:</b>
	<?php echo CHtml::encode($data->degeraraci_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sayisi')); ?>:</b>
	<?php echo CHtml::encode($data->sayisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saat')); ?>:</b>
	<?php echo CHtml::encode($data->saat); ?>
	<br />


</div>