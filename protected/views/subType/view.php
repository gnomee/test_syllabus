<?php
/* @var $this SubTypeController */
/* @var $model SubType */

$this->breadcrumbs=array(
	'Sub Types'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List SubType', 'url'=>array('index')),
	array('label'=>'Create SubType', 'url'=>array('create')),
	array('label'=>'Update SubType', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete SubType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubType', 'url'=>array('admin')),
);
?>

<h1>View SubType #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'SubType',
		'Type_Id',
	),
)); ?>
