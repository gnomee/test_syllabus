<?php
/* @var $this DersogrciktiController */
/* @var $model Dersogrcikti */

$this->breadcrumbs=array(
	'Dersogrciktis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dersogrcikti', 'url'=>array('index')),
	array('label'=>'Create Dersogrcikti', 'url'=>array('create')),
	array('label'=>'Update Dersogrcikti', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dersogrcikti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dersogrcikti', 'url'=>array('admin')),
);
?>

<h1>View Dersogrcikti #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dersgenelbilgi_id',
		'dersogrcikti',
	),
)); ?>
