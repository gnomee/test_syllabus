<?php
/* @var $this IsyukuController */
/* @var $model Isyuku */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'isyuku-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'degeraraci_id'); ?>
		<?php echo $form->textField($model,'degeraraci_id'); ?>
		<?php echo $form->error($model,'degeraraci_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sayisi'); ?>
		<?php echo $form->textField($model,'sayisi'); ?>
		<?php echo $form->error($model,'sayisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saat'); ?>
		<?php echo $form->textField($model,'saat'); ?>
		<?php echo $form->error($model,'saat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->