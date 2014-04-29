<?php
/* @var $this DersogrciktiController */
/* @var $model Dersogrcikti */

$this->breadcrumbs=array(
	'Dersogrciktis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dersogrcikti', 'url'=>array('index')),
	array('label'=>'Create Dersogrcikti', 'url'=>array('create')),
	array('label'=>'View Dersogrcikti', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dersogrcikti', 'url'=>array('admin')),
);
?>

<h1>Update Dersogrcikti <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>