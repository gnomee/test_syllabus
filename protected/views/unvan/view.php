<?php
/* @var $this UnvanController */
/* @var $model Unvan */

$this->breadcrumbs=array(
	'Unvans'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Unvan', 'url'=>array('index')),
	array('label'=>'Create Unvan', 'url'=>array('create')),
	array('label'=>'Update Unvan', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Unvan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Unvan', 'url'=>array('admin')),
);
?>

<h1>View Unvan #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Unvan',
		'kg',
		'en',
		'tr',
		'ru',
	),
)); ?>
