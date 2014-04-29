<?php
/* @var $this KaynakController */
/* @var $model Kaynak */
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
		<?php echo $form->label($model,'kaynak'); ?>
		<?php echo $form->textField($model,'kaynak',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'turu'); ?>
		<?php echo $form->textField($model,'turu',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->