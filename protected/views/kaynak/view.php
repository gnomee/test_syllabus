<?php
/* @var $this KaynakController */
/* @var $model Kaynak */

$this->breadcrumbs=array(
	'Kaynaks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kaynak', 'url'=>array('index')),
	array('label'=>'Create Kaynak', 'url'=>array('create')),
	array('label'=>'Update Kaynak', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kaynak', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kaynak', 'url'=>array('admin')),
);
?>

<h1>View Kaynak #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dersgenelbilgi_id',
		'kaynak',
		'turu',
	),
)); ?>
