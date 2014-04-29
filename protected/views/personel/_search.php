<?php
/* @var $this PersonelController */
/* @var $model Personel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Surname'); ?>
		<?php echo $form->textField($model,'Surname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Namekg'); ?>
		<?php echo $form->textField($model,'Namekg',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Surnamekg'); ?>
		<?php echo $form->textField($model,'Surnamekg',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nameru'); ?>
		<?php echo $form->textField($model,'Nameru',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Surnameru'); ?>
		<?php echo $form->textField($model,'Surnameru',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nameen'); ?>
		<?php echo $form->textField($model,'Nameen',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Surnameen'); ?>
		<?php echo $form->textField($model,'Surnameen',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gorev_Id'); ?>
		<?php echo $form->textField($model,'Gorev_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Unvan_Id'); ?>
		<?php echo $form->textField($model,'Unvan_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OdaN'); ?>
		<?php echo $form->textField($model,'OdaN',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tel'); ?>
		<?php echo $form->textField($model,'Tel',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Faks'); ?>
		<?php echo $form->textField($model,'Faks',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dahili'); ?>
		<?php echo $form->textField($model,'Dahili',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cep'); ?>
		<?php echo $form->textField($model,'Cep',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Eposta'); ?>
		<?php echo $form->textField($model,'Eposta',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kimlik'); ?>
		<?php echo $form->textField($model,'Kimlik',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Type_Id'); ?>
		<?php echo $form->textField($model,'Type_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SubType_Id'); ?>
		<?php echo $form->textField($model,'SubType_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bina_Id'); ?>
		<?php echo $form->textField($model,'Bina_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hidden'); ?>
		<?php echo $form->textField($model,'Hidden',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ireet'); ?>
		<?php echo $form->textField($model,'Ireet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->