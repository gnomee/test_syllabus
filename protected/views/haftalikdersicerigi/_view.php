<?php
/* @var $this HaftalikdersicerigiController */
/* @var $data Haftalikdersicerigi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersgenelbilgi_id')); ?>:</b>
	<?php echo CHtml::encode($data->dersgenelbilgi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hafta')); ?>:</b>
	<?php echo CHtml::encode($data->hafta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('konu')); ?>:</b>
	<?php echo CHtml::encode($data->konu); ?>
	<br />


</div>