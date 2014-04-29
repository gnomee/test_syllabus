<?php
/* @var $this SubTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Types',
);

$this->menu=array(
	array('label'=>'Create SubType', 'url'=>array('create')),
	array('label'=>'Manage SubType', 'url'=>array('admin')),
);
?>

<h1>Sub Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
