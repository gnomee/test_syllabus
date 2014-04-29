<?php
/* @var $this PersonelController */
/* @var $model Personel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Surname'); ?>
		<?php echo $form->textField($model,'Surname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Surname'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'Namekg'); ?>
		<?php echo $form->textField($model,'Namekg',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Namekg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Surnamekg'); ?>
		<?php echo $form->textField($model,'Surnamekg',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Surnamekg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nameru'); ?>
		<?php echo $form->textField($model,'Nameru',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nameru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Surnameru'); ?>
		<?php echo $form->textField($model,'Surnameru',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Surnameru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nameen'); ?>
		<?php echo $form->textField($model,'Nameen',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nameen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Surnameen'); ?>
		<?php echo $form->textField($model,'Surnameen',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Surnameen'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Gorev_Id'); ?>
		<?php echo $form->textField($model,'Gorev_Id'); ?>
		<?php echo $form->error($model,'Gorev_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Unvan_Id'); ?>
		<?php echo $form->textField($model,'Unvan_Id'); ?>
		<?php echo $form->error($model,'Unvan_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OdaN'); ?>
		<?php echo $form->textField($model,'OdaN',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'OdaN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tel'); ?>
		<?php echo $form->textField($model,'Tel',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Faks'); ?>
		<?php echo $form->textField($model,'Faks',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Faks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dahili'); ?>
		<?php echo $form->textField($model,'Dahili',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Dahili'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cep'); ?>
		<?php echo $form->textField($model,'Cep',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Eposta'); ?>
		<?php echo $form->textField($model,'Eposta',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'Eposta'); ?>
	</div>-->

<!--	<div class="row">
		<?php echo $form->labelEx($model,'Kimlik'); ?>
		<?php echo $form->textField($model,'Kimlik',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'Kimlik'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'Type_Id'); ?>
		<?php //echo $form->textField($model,'Type_Id'); 
        echo CHtml::dropDownList('Type_Id','', CHtml::listData(Type::model()->findAll(),'Id','Type'),
            array(
            'ajax' => array(
            'type'=>'POST', //request type
            'url'=>CController::createUrl('personel/dynamiccities'), //url to call.
            //Style: CController::createUrl('currentController/methodToCall')
            'update'=>'#city_id', //selector to update
            //'data'=>'js:javascript statement' 
            //leave out the data key to pass all form values through
            )));
        ?>
		<?php echo $form->error($model,'Type_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SubType_Id'); ?>
		<?php //echo $form->textField($model,'SubType_Id'); 
        //echo CHtml::activeTextField($model,'SubType_Id',array('id'=>"city_id"));
        echo CHtml::activeDropDownList($model,'SubType_Id',array(),array('id'=>'city_id'));
        ?>
		<?php echo $form->error($model,'SubType_Id'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Bina_Id'); ?>
		<?php echo $form->textField($model,'Bina_Id'); ?>
		<?php echo $form->error($model,'Bina_Id'); ?>
	</div>-->

<!--	<div class="row">
		<?php echo $form->labelEx($model,'Hidden'); ?>
		<?php echo $form->textField($model,'Hidden',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Hidden'); ?>
	</div>
-->
<!--	<div class="row">
		<?php echo $form->labelEx($model,'Ireet'); ?>
		<?php echo $form->textField($model,'Ireet'); ?>
		<?php echo $form->error($model,'Ireet'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->