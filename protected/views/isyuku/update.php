<?php
/* @var $this IsyukuController */
/* @var $model Isyuku */

$this->breadcrumbs=array(
	'Isyukus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Isyuku', 'url'=>array('index')),
	array('label'=>'Create Isyuku', 'url'=>array('create')),
	array('label'=>'View Isyuku', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Isyuku', 'url'=>array('admin')),
);
?>

<h1>Update Isyuku <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>