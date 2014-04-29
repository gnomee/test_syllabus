<?php
/* @var $this UnvanController */
/* @var $model Unvan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unvan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Unvan'); ?>
		<?php echo $form->textField($model,'Unvan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Unvan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kg'); ?>
		<?php echo $form->textField($model,'kg',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'kg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en'); ?>
		<?php echo $form->textField($model,'en',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tr'); ?>
		<?php echo $form->textField($model,'tr',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru'); ?>
		<?php echo $form->textField($model,'ru',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ru'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->