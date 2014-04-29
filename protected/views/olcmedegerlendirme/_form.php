<?php
/* @var $this OlcmedegerlendirmeController */
/* @var $model Olcmedegerlendirme */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'olcmedegerlendirme-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'degeracai_id'); ?>
		<?php echo $form->textField($model,'degeracai_id'); ?>
		<?php echo $form->error($model,'degeracai_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adet'); ?>
		<?php echo $form->textField($model,'adet'); ?>
		<?php echo $form->error($model,'adet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'katki'); ?>
		<?php echo $form->textField($model,'katki'); ?>
		<?php echo $form->error($model,'katki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yilicisonu'); ?>
		<?php echo $form->textField($model,'yilicisonu'); ?>
		<?php echo $form->error($model,'yilicisonu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->