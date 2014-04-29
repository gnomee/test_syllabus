<?php
/* @var $this MaindersController */
/* @var $data Mainders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fid')); ?>:</b>
	<?php echo CHtml::encode($data->fid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bid')); ?>:</b>
	<?php echo CHtml::encode($data->bid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('koordinatorid')); ?>:</b>
	<?php echo CHtml::encode($data->koordinatorid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('derskod')); ?>:</b>
	<?php echo CHtml::encode($data->derskod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersad_kg')); ?>:</b>
	<?php echo CHtml::encode($data->dersad_kg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersad_tr')); ?>:</b>
	<?php echo CHtml::encode($data->dersad_tr); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('yariyil')); ?>:</b>
	<?php echo CHtml::encode($data->yariyil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dersturu')); ?>:</b>
	<?php echo CHtml::encode($data->dersturu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('onkosullumu')); ?>:</b>
	<?php echo CHtml::encode($data->onkosullumu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('onkosulmu')); ?>:</b>
	<?php echo CHtml::encode($data->onkosulmu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('krediteori')); ?>:</b>
	<?php echo CHtml::encode($data->krediteori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('krediuygulama')); ?>:</b>
	<?php echo CHtml::encode($data->krediuygulama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kreditoplam')); ?>:</b>
	<?php echo CHtml::encode($data->kreditoplam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('akts')); ?>:</b>
	<?php echo CHtml::encode($data->akts); ?>
	<br />

	*/ ?>

</div>