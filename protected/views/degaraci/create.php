<?php
/* @var $this DegaraciController */
/* @var $model Degaraci */

$this->breadcrumbs=array(
	'Degaracis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Degaraci', 'url'=>array('index')),
	array('label'=>'Manage Degaraci', 'url'=>array('admin')),
);
?>

<h1>Create Degaraci</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>