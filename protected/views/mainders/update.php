<?php
/* @var $this MaindersController */
/* @var $model Mainders */

$this->breadcrumbs=array(
	'Mainders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mainders', 'url'=>array('index')),
	array('label'=>'Create Mainders', 'url'=>array('create')),
	array('label'=>'View Mainders', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mainders', 'url'=>array('admin')),
);
?>

<h1>Update Mainders <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>