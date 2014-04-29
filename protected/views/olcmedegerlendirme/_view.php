<?php
/* @var $this OlcmedegerlendirmeController */
/* @var $data Olcmedegerlendirme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degeracai_id')); ?>:</b>
	<?php echo CHtml::encode($data->degeracai_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adet')); ?>:</b>
	<?php echo CHtml::encode($data->adet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('katki')); ?>:</b>
	<?php echo CHtml::encode($data->katki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yilicisonu')); ?>:</b>
	<?php echo CHtml::encode($data->yilicisonu); ?>
	<br />


</div>