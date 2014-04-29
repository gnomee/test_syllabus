<?php
/* @var $this DegaraciController */
/* @var $model Degaraci */

$this->breadcrumbs=array(
	'Degaracis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Degaraci', 'url'=>array('index')),
	array('label'=>'Create Degaraci', 'url'=>array('create')),
	array('label'=>'View Degaraci', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Degaraci', 'url'=>array('admin')),
);
?>

<h1>Update Degaraci <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>