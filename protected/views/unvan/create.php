<?php
/* @var $this UnvanController */
/* @var $model Unvan */

$this->breadcrumbs=array(
	'Unvans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Unvan', 'url'=>array('index')),
	array('label'=>'Manage Unvan', 'url'=>array('admin')),
);
?>

<h1>Create Unvan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>