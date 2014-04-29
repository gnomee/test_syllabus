<?php
/* @var $this IsyukuController */
/* @var $model Isyuku */

$this->breadcrumbs=array(
	'Isyukus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Isyuku', 'url'=>array('index')),
	array('label'=>'Manage Isyuku', 'url'=>array('admin')),
);
?>

<h1>Create Isyuku</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>