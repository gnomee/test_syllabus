<?php
/* @var $this DegaraciController */
/* @var $model Degaraci */

$this->breadcrumbs=array(
	'Degaracis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Degaraci', 'url'=>array('index')),
	array('label'=>'Create Degaraci', 'url'=>array('create')),
	array('label'=>'Update Degaraci', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Degaraci', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Degaraci', 'url'=>array('admin')),
);
?>

<h1>View Degaraci #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'degaraci',
	),
)); ?>
