<?php
/* @var $this PersonelController */
/* @var $model Personel */

$this->breadcrumbs=array(
	'Personels'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Personel', 'url'=>array('index')),
	array('label'=>'Create Personel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personels</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Name',
		'Surname',
		'Namekg',
		'Surnamekg',
		'Nameru',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
