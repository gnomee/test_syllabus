<?php
/* @var $this DersgenelbilgiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dersgenelbilgis',
);

$this->menu=array(
	array('label'=>'Create Dersgenelbilgi', 'url'=>array('create')),
	array('label'=>'Manage Dersgenelbilgi', 'url'=>array('admin')),
);
?>

<h1>Dersgenelbilgis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
