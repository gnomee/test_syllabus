<?php
/* @var $this KaynakController */
/* @var $model Kaynak */

$this->breadcrumbs=array(
	'Kaynaks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kaynak', 'url'=>array('index')),
	array('label'=>'Create Kaynak', 'url'=>array('create')),
	array('label'=>'View Kaynak', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kaynak', 'url'=>array('admin')),
);
?>

<h1>Update Kaynak <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>