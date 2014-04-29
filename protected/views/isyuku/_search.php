<?php
/* @var $this IsyukuController */
/* @var $model Isyuku */
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
		<?php echo $form->label($model,'degeraraci_id'); ?>
		<?php echo $form->textField($model,'degeraraci_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sayisi'); ?>
		<?php echo $form->textField($model,'sayisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saat'); ?>
		<?php echo $form->textField($model,'saat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->