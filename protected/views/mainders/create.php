<?php
/* @var $this MaindersController */
/* @var $model Mainders */

$this->breadcrumbs=array(
	'Mainders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mainders', 'url'=>array('index')),
	array('label'=>'Manage Mainders', 'url'=>array('admin')),
);
?>

<h1>Create Mainders</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>