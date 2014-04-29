<?php
/* @var $this UnvanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unvans',
);

$this->menu=array(
	array('label'=>'Create Unvan', 'url'=>array('create')),
	array('label'=>'Manage Unvan', 'url'=>array('admin')),
);
?>

<h1>Unvans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
