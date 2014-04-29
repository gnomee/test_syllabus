<?php
/* @var $this SubTypeController */
/* @var $model SubType */

$this->breadcrumbs=array(
	'Sub Types'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubType', 'url'=>array('index')),
	array('label'=>'Create SubType', 'url'=>array('create')),
	array('label'=>'View SubType', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage SubType', 'url'=>array('admin')),
);
?>

<h1>Update SubType <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>