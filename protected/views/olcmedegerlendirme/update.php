<?php
/* @var $this OlcmedegerlendirmeController */
/* @var $model Olcmedegerlendirme */

$this->breadcrumbs=array(
	'Olcmedegerlendirmes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Olcmedegerlendirme', 'url'=>array('index')),
	array('label'=>'Create Olcmedegerlendirme', 'url'=>array('create')),
	array('label'=>'View Olcmedegerlendirme', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Olcmedegerlendirme', 'url'=>array('admin')),
);
?>

<h1>Update Olcmedegerlendirme <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>