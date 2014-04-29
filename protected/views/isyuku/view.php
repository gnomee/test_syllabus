<?php
/* @var $this IsyukuController */
/* @var $model Isyuku */

$this->breadcrumbs=array(
	'Isyukus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Isyuku', 'url'=>array('index')),
	array('label'=>'Create Isyuku', 'url'=>array('create')),
	array('label'=>'Update Isyuku', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Isyuku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Isyuku', 'url'=>array('admin')),
);
?>

<h1>View Isyuku #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'degeraraci_id',
		'sayisi',
		'saat',
	),
)); ?>
