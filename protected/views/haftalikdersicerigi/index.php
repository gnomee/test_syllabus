<?php
/* @var $this HaftalikdersicerigiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Haftalikdersicerigis',
);

$this->menu=array(
	array('label'=>'Create Haftalikdersicerigi', 'url'=>array('create')),
	array('label'=>'Manage Haftalikdersicerigi', 'url'=>array('admin')),
);
?>

<h1>Haftalikdersicerigis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
