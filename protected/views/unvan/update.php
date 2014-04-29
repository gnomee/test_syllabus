<?php
/* @var $this UnvanController */
/* @var $model Unvan */

$this->breadcrumbs=array(
	'Unvans'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Unvan', 'url'=>array('index')),
	array('label'=>'Create Unvan', 'url'=>array('create')),
	array('label'=>'View Unvan', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Unvan', 'url'=>array('admin')),
);
?>

<h1>Update Unvan <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>