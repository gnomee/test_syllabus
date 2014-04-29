<?php
/* @var $this DersogrciktiController */
/* @var $model Dersogrcikti */

$this->breadcrumbs=array(
	'Dersogrciktis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dersogrcikti', 'url'=>array('index')),
	array('label'=>'Manage Dersogrcikti', 'url'=>array('admin')),
);
?>

<h1>Create Dersogrcikti</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>