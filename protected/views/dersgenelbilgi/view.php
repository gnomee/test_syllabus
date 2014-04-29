<?php
/* @var $this DersgenelbilgiController */
/* @var $model Dersgenelbilgi */

$this->breadcrumbs=array(
	'Dersgenelbilgis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dersgenelbilgi', 'url'=>array('index')),
	array('label'=>'Create Dersgenelbilgi', 'url'=>array('create')),
	array('label'=>'Update Dersgenelbilgi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dersgenelbilgi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dersgenelbilgi', 'url'=>array('admin')),
);
?>

<h1>View Dersgenelbilgi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mainders_id',
		'dersveren',
		'dersdili',
		'yardimcilar',
		'derslik',
		'amaci',
	),
)); ?>
