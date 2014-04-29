<?php
/* @var $this DersogrciktiController */
/* @var $model Dersogrcikti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dersogrcikti-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dersgenelbilgi_id'); ?>
		<?php echo $form->textField($model,'dersgenelbilgi_id'); ?>
		<?php echo $form->error($model,'dersgenelbilgi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dersogrcikti'); ?>
		<?php echo $form->textArea($model,'dersogrcikti',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dersogrcikti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->