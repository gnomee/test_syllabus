<?php
/* @var $this OlcmedegerlendirmeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Olcmedegerlendirmes',
);

$this->menu=array(
	array('label'=>'Create Olcmedegerlendirme', 'url'=>array('create')),
	array('label'=>'Manage Olcmedegerlendirme', 'url'=>array('admin')),
);
?>

<h1>Olcmedegerlendirmes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
