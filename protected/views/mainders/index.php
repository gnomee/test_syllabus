<?php
/* @var $this MaindersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mainders',
);

$this->menu=array(
	array('label'=>'Create Mainders', 'url'=>array('create')),
	array('label'=>'Manage Mainders', 'url'=>array('admin')),
);
?>

<h1>Mainders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
