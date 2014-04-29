<?php
/* @var $this DersogrciktiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dersogrciktis',
);

$this->menu=array(
	array('label'=>'Create Dersogrcikti', 'url'=>array('create')),
	array('label'=>'Manage Dersogrcikti', 'url'=>array('admin')),
);
?>

<h1>Dersogrciktis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
