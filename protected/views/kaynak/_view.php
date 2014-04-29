<?php
/* @var $this KaynakController */
/* @var $data Kaynak */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersgenelbilgi_id')); ?>:</b>
	<?php echo CHtml::encode($data->dersgenelbilgi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kaynak')); ?>:</b>
	<?php echo CHtml::encode($data->kaynak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('turu')); ?>:</b>
	<?php echo CHtml::encode($data->turu); ?>
	<br />


</div>