<?php
/* @var $this GuruController */
/* @var $model Guru */

$this->breadcrumbs=array(
	'Gurus'=>array('index'),
	$model->nip,
);

$this->menu=array(
	array('label'=>'List Guru', 'url'=>array('index')),
	array('label'=>'Create Guru', 'url'=>array('create')),
	array('label'=>'Update Guru', 'url'=>array('update', 'id'=>$model->nip)),
	array('label'=>'Delete Guru', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nip),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Guru', 'url'=>array('admin')),
);
?>

<h1>View Guru #<?php echo $model->nip; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nip',
		'nama_guru',
		'tempat_lahir',
		'tanggal_lahir',
		'golongan',
		'spesialisai',
	),
)); ?>
