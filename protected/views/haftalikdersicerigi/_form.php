<?php
/* @var $this HaftalikdersicerigiController */
/* @var $model Haftalikdersicerigi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'haftalikdersicerigi-form',
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
		<?php echo $form->labelEx($model,'hafta'); ?>
		<?php echo $form->textField($model,'hafta',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'hafta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'konu'); ?>
		<?php echo $form->textField($model,'konu',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'konu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->