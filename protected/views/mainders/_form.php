<?php
/* @var $this MaindersController */
/* @var $model Mainders */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mainders-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fid'); ?>
		<?php echo $form->textField($model,'fid'); ?>
		<?php echo $form->error($model,'fid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bid'); ?>
		<?php echo $form->textField($model,'bid'); ?>
		<?php echo $form->error($model,'bid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'koordinatorid'); ?>
		<?php echo $form->textField($model,'koordinatorid'); ?>
		<?php echo $form->error($model,'koordinatorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'derskod'); ?>
		<?php echo $form->textField($model,'derskod',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'derskod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dersad_kg'); ?>
		<?php echo $form->textField($model,'dersad_kg',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'dersad_kg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dersad_tr'); ?>
		<?php echo $form->textField($model,'dersad_tr',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'dersad_tr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yariyil'); ?>
		<?php echo $form->textField($model,'yariyil'); ?>
		<?php echo $form->error($model,'yariyil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dersturu'); ?>
		<?php echo $form->textField($model,'dersturu'); ?>
		<?php echo $form->error($model,'dersturu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'onkosullumu'); ?>
		<?php echo $form->textField($model,'onkosullumu'); ?>
		<?php echo $form->error($model,'onkosullumu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'onkosulmu'); ?>
		<?php echo $form->textField($model,'onkosulmu'); ?>
		<?php echo $form->error($model,'onkosulmu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'krediteori'); ?>
		<?php echo $form->textField($model,'krediteori'); ?>
		<?php echo $form->error($model,'krediteori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'krediuygulama'); ?>
		<?php echo $form->textField($model,'krediuygulama'); ?>
		<?php echo $form->error($model,'krediuygulama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kreditoplam'); ?>
		<?php echo $form->textField($model,'kreditoplam'); ?>
		<?php echo $form->error($model,'kreditoplam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'akts'); ?>
		<?php echo $form->textField($model,'akts'); ?>
		<?php echo $form->error($model,'akts'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->