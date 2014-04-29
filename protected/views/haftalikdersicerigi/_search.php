<?php
/* @var $this HaftalikdersicerigiController */
/* @var $model Haftalikdersicerigi */
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
		<?php echo $form->label($model,'dersgenelbilgi_id'); ?>
		<?php echo $form->textField($model,'dersgenelbilgi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hafta'); ?>
		<?php echo $form->textField($model,'hafta',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'konu'); ?>
		<?php echo $form->textField($model,'konu',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->