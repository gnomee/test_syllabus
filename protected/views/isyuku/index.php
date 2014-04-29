<?php
/* @var $this IsyukuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Isyukus',
);

$this->menu=array(
	array('label'=>'Create Isyuku', 'url'=>array('create')),
	array('label'=>'Manage Isyuku', 'url'=>array('admin')),
);
?>

<h1>Isyukus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
