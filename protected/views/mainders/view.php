<?php
/* @var $this MaindersController */
/* @var $model Mainders */

$this->breadcrumbs=array(
	'Mainders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mainders', 'url'=>array('index')),
	array('label'=>'Create Mainders', 'url'=>array('create')),
	array('label'=>'Update Mainders', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mainders', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mainders', 'url'=>array('admin')),
);
?>

<h1>View Mainders #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fid',
		'bid',
		'koordinatorid',
		'derskod',
		'dersad_kg',
		'dersad_tr',
		'yariyil',
		'dersturu',
		'onkosullumu',
		'onkosulmu',
		'krediteori',
		'krediuygulama',
		'kreditoplam',
		'akts',
	),
)); ?>
