<?php
/* @var $this OlcmedegerlendirmeController */
/* @var $model Olcmedegerlendirme */
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
		<?php echo $form->label($model,'degeracai_id'); ?>
		<?php echo $form->textField($model,'degeracai_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adet'); ?>
		<?php echo $form->textField($model,'adet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'katki'); ?>
		<?php echo $form->textField($model,'katki'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yilicisonu'); ?>
		<?php echo $form->textField($model,'yilicisonu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->