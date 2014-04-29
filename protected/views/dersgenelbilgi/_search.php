<?php
/* @var $this DersgenelbilgiController */
/* @var $model Dersgenelbilgi */
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
		<?php echo $form->label($model,'mainders_id'); ?>
		<?php echo $form->textField($model,'mainders_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dersveren'); ?>
		<?php echo $form->textField($model,'dersveren'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dersdili'); ?>
		<?php echo $form->textField($model,'dersdili'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yardimcilar'); ?>
		<?php echo $form->textField($model,'yardimcilar',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'derslik'); ?>
		<?php echo $form->textField($model,'derslik',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amaci'); ?>
		<?php echo $form->textArea($model,'amaci',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->