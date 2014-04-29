<?php
/* @var $this PersonelController */
/* @var $model Personel */

$this->breadcrumbs=array(
	'Personels'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Personel', 'url'=>array('index')),
	array('label'=>'Create Personel', 'url'=>array('create')),
	array('label'=>'Update Personel', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Personel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personel', 'url'=>array('admin')),
);
?>

<h1>View Personel #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Name',
		'Surname',
		'Namekg',
		'Surnamekg',
		'Nameru',
		'Surnameru',
		'Nameen',
		'Surnameen',
		'Gorev_Id',
		'Unvan_Id',
		'OdaN',
		'Tel',
		'Faks',
		'Dahili',
		'Cep',
		'Eposta',
		'Kimlik',
		'Type_Id',
		'SubType_Id',
		'Bina_Id',
		'Hidden',
		'Ireet',
	),
)); ?>
