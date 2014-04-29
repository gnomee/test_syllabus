<?php
/* @var $this KaynakController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kaynaks',
);

$this->menu=array(
	array('label'=>'Create Kaynak', 'url'=>array('create')),
	array('label'=>'Manage Kaynak', 'url'=>array('admin')),
);
?>

<h1>Kaynaks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
