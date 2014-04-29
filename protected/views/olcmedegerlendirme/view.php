<?php
/* @var $this OlcmedegerlendirmeController */
/* @var $model Olcmedegerlendirme */

$this->breadcrumbs=array(
	'Olcmedegerlendirmes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Olcmedegerlendirme', 'url'=>array('index')),
	array('label'=>'Create Olcmedegerlendirme', 'url'=>array('create')),
	array('label'=>'Update Olcmedegerlendirme', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Olcmedegerlendirme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Olcmedegerlendirme', 'url'=>array('admin')),
);
?>

<h1>View Olcmedegerlendirme #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'degeracai_id',
		'adet',
		'katki',
		'yilicisonu',
	),
)); ?>
