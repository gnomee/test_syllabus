<?php
/* @var $this SubTypeController */
/* @var $data SubType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SubType')); ?>:</b>
	<?php echo CHtml::encode($data->SubType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Type_Id')); ?>:</b>
	<?php echo CHtml::encode($data->Type_Id); ?>
	<br />


</div>