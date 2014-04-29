<?php
/* @var $this HaftalikdersicerigiController */
/* @var $model Haftalikdersicerigi */

$this->breadcrumbs=array(
	'Haftalikdersicerigis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Haftalikdersicerigi', 'url'=>array('index')),
	array('label'=>'Create Haftalikdersicerigi', 'url'=>array('create')),
	array('label'=>'Update Haftalikdersicerigi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Haftalikdersicerigi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Haftalikdersicerigi', 'url'=>array('admin')),
);
?>

<h1>View Haftalikdersicerigi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dersgenelbilgi_id',
		'hafta',
		'konu',
	),
)); ?>
