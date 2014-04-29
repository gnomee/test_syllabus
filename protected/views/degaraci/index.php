<?php
/* @var $this DegaraciController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Degaracis',
);

$this->menu=array(
	array('label'=>'Create Degaraci', 'url'=>array('create')),
	array('label'=>'Manage Degaraci', 'url'=>array('admin')),
);
?>

<h1>Degaracis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
