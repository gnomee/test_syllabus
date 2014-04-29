<?php
/* @var $this DersgenelbilgiController */
/* @var $model Dersgenelbilgi */

$this->breadcrumbs=array(
	'Dersgenelbilgis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dersgenelbilgi', 'url'=>array('index')),
	array('label'=>'Create Dersgenelbilgi', 'url'=>array('create')),
	array('label'=>'View Dersgenelbilgi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dersgenelbilgi', 'url'=>array('admin')),
);
?>

<h1>Update Dersgenelbilgi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>