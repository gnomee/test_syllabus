<?php
/* @var $this HaftalikdersicerigiController */
/* @var $model Haftalikdersicerigi */

$this->breadcrumbs=array(
	'Haftalikdersicerigis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Haftalikdersicerigi', 'url'=>array('index')),
	array('label'=>'Create Haftalikdersicerigi', 'url'=>array('create')),
	array('label'=>'View Haftalikdersicerigi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Haftalikdersicerigi', 'url'=>array('admin')),
);
?>

<h1>Update Haftalikdersicerigi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>