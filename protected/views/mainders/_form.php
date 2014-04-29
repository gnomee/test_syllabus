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
		<?php echo $form->labelEx($model,Yii::t('dictionary', 'fid')); ?>
		<?php //echo $form->textField($model,'fid'); 
        echo CHtml::dropDownList('fid', '', CHtml::listData(Type::model()->findAll('Type like :type1 or Type like :type2', 
                      array(':type1'=>'%FAKÜLTESİ',':type2'=>'%YÜKSEKOKULU')),'Id','Type'),
            array(
            'empty' => 'Choose...',
            'ajax' => array(
            'type'=>'POST', //request type
            'url'=>CController::createUrl('mainders/dynamiccities'), //url to call.
            //Style: CController::createUrl('currentController/methodToCall')
            'update'=>'#city_id', //selector to update
            //'data'=>'js:javascript statement' 
            //leave out the data key to pass all form values through
            )));
        ?>
		<?php echo $form->error($model,'fid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bid'); ?>
		<?php //echo $form->textField($model,'bid'); 
            //echo CHtml::activeDropDownList($model,'bid',array(),array('id'=>'city_id'));
            echo CHtml::dropDownList('bid', '', array(),
                array(
                'id'=>'city_id',
                //'empty' => 'Choose...',
                'ajax' => array(
                'type'=>'POST', //request type
                'url'=>CController::createUrl('mainders/dynamiccities2'), //url to call.
                //Style: CController::createUrl('currentController/methodToCall')
                'update'=>'#city1_id', //selector to update
                //'data'=>'js:javascript statement' 
                //leave out the data key to pass all form values through
                )));
        ?>
		<?php echo $form->error($model,'bid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'koordinatorid'); ?>
		<?php //echo $form->textField($model,'koordinatorid'); 
        echo CHtml::activeDropDownList($model,'koordinatorid',array(),array('id'=>'city1_id'));
        ?>
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
		<?php echo CHtml::activeDropDownList($model,'koordinatorid',Mainders::model()->semestr);//echo $form->textField($model,'yariyil'); ?>
		<?php echo $form->error($model,'yariyil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dersturu'); ?>
		<?=CHtml::activeDropDownList($model,'dersturu',Mainders::model()->dersTuru); //echo $form->textField($model,'dersturu'); ?>
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