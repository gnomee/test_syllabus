<?php
/* @var $this OlcmedegerlendirmeController */
/* @var $model Olcmedegerlendirme */

$this->breadcrumbs=array(
	'Olcmedegerlendirmes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Olcmedegerlendirme', 'url'=>array('index')),
	array('label'=>'Manage Olcmedegerlendirme', 'url'=>array('admin')),
);
?>

<h1>Create Olcmedegerlendirme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>