<?php
/* @var $this HaftalikdersicerigiController */
/* @var $model Haftalikdersicerigi */

$this->breadcrumbs=array(
	'Haftalikdersicerigis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Haftalikdersicerigi', 'url'=>array('index')),
	array('label'=>'Manage Haftalikdersicerigi', 'url'=>array('admin')),
);
?>

<h1>Create Haftalikdersicerigi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>