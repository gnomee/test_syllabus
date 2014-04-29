<?php
/* @var $this SubTypeController */
/* @var $model SubType */

$this->breadcrumbs=array(
	'Sub Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubType', 'url'=>array('index')),
	array('label'=>'Manage SubType', 'url'=>array('admin')),
);
?>

<h1>Create SubType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>