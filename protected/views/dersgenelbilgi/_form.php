<?php
/* @var $this DersgenelbilgiController */
/* @var $model Dersgenelbilgi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dersgenelbilgi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mainders_id'); ?>
		<?php echo $form->textField($model,'mainders_id'); ?>
		<?php echo $form->error($model,'mainders_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dersveren'); ?>
		<?php echo $form->textField($model,'dersveren'); ?>
		<?php echo $form->error($model,'dersveren'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dersdili'); ?>
		<?php echo $form->textField($model,'dersdili'); ?>
		<?php echo $form->error($model,'dersdili'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yardimcilar'); ?>
		<?php echo $form->textField($model,'yardimcilar',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'yardimcilar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'derslik'); ?>
		<?php echo $form->textField($model,'derslik',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'derslik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amaci'); ?>
		<?php echo $form->textArea($model,'amaci',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'amaci'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->