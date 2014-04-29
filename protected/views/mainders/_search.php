<?php
/* @var $this MaindersController */
/* @var $model Mainders */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fid'); ?>
		<?php echo $form->textField($model,'fid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bid'); ?>
		<?php echo $form->textField($model,'bid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'koordinatorid'); ?>
		<?php echo $form->textField($model,'koordinatorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'derskod'); ?>
		<?php echo $form->textField($model,'derskod',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dersad_kg'); ?>
		<?php echo $form->textField($model,'dersad_kg',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dersad_tr'); ?>
		<?php echo $form->textField($model,'dersad_tr',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yariyil'); ?>
		<?php echo $form->textField($model,'yariyil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dersturu'); ?>
		<?php echo $form->textField($model,'dersturu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'onkosullumu'); ?>
		<?php echo $form->textField($model,'onkosullumu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'onkosulmu'); ?>
		<?php echo $form->textField($model,'onkosulmu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'krediteori'); ?>
		<?php echo $form->textField($model,'krediteori'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'krediuygulama'); ?>
		<?php echo $form->textField($model,'krediuygulama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kreditoplam'); ?>
		<?php echo $form->textField($model,'kreditoplam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'akts'); ?>
		<?php echo $form->textField($model,'akts'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->