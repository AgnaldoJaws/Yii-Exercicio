<?php
/* @var $this EnderecoController */
/* @var $model Endereco */

$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	$model->idEndereco,
);

$this->menu=array(
	array('label'=>'List Endereco', 'url'=>array('index')),
	array('label'=>'Create Endereco', 'url'=>array('create')),
	array('label'=>'Update Endereco', 'url'=>array('update', 'id'=>$model->idEndereco)),
	array('label'=>'Delete Endereco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEndereco),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Endereco', 'url'=>array('admin')),
);
?>

<h1>View Endereco #<?php echo $model->idEndereco; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEndereco',
		'rua',
		'numero',
	),
)); ?>
