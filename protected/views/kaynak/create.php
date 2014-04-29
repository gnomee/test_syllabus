<?php
/* @var $this KaynakController */
/* @var $model Kaynak */

$this->breadcrumbs=array(
	'Kaynaks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kaynak', 'url'=>array('index')),
	array('label'=>'Manage Kaynak', 'url'=>array('admin')),
);
?>

<h1>Create Kaynak</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>