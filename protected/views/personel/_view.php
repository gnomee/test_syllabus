<?php
/* @var $this PersonelController */
/* @var $data Personel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Surname')); ?>:</b>
	<?php echo CHtml::encode($data->Surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Namekg')); ?>:</b>
	<?php echo CHtml::encode($data->Namekg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Surnamekg')); ?>:</b>
	<?php echo CHtml::encode($data->Surnamekg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nameru')); ?>:</b>
	<?php echo CHtml::encode($data->Nameru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Surnameru')); ?>:</b>
	<?php echo CHtml::encode($data->Surnameru); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nameen')); ?>:</b>
	<?php echo CHtml::encode($data->Nameen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Surnameen')); ?>:</b>
	<?php echo CHtml::encode($data->Surnameen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gorev_Id')); ?>:</b>
	<?php echo CHtml::encode($data->Gorev_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unvan_Id')); ?>:</b>
	<?php echo CHtml::encode($data->Unvan_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OdaN')); ?>:</b>
	<?php echo CHtml::encode($data->OdaN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tel')); ?>:</b>
	<?php echo CHtml::encode($data->Tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Faks')); ?>:</b>
	<?php echo CHtml::encode($data->Faks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dahili')); ?>:</b>
	<?php echo CHtml::encode($data->Dahili); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cep')); ?>:</b>
	<?php echo CHtml::encode($data->Cep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Eposta')); ?>:</b>
	<?php echo CHtml::encode($data->Eposta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kimlik')); ?>:</b>
	<?php echo CHtml::encode($data->Kimlik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Type_Id')); ?>:</b>
	<?php echo CHtml::encode($data->Type_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SubType_Id')); ?>:</b>
	<?php echo CHtml::encode($data->SubType_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bina_Id')); ?>:</b>
	<?php echo CHtml::encode($data->Bina_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hidden')); ?>:</b>
	<?php echo CHtml::encode($data->Hidden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ireet')); ?>:</b>
	<?php echo CHtml::encode($data->Ireet); ?>
	<br />

	*/ ?>

</div>