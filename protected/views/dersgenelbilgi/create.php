<?php
/* @var $this DersgenelbilgiController */
/* @var $model Dersgenelbilgi */

$this->breadcrumbs=array(
	'Dersgenelbilgis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dersgenelbilgi', 'url'=>array('index')),
	array('label'=>'Manage Dersgenelbilgi', 'url'=>array('admin')),
);
?>

<h1>Create Dersgenelbilgi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>