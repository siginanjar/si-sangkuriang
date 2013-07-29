<?php
 @var $this AbsensiController 
 @var $model Absensi

$this->breadcrumbs=array(
	'Absensis'=>array('index'),
	$model->id_absensi,
);

$this->menu=array(
	array('label'=>'List Absensi', 'url'=>array('index')),
	array('label'=>'Create Absensi', 'url'=>array('create')),
	array('label'=>'Update Absensi', 'url'=>array('update', 'id'=>$model->id_absensi)),
	array('label'=>'Delete Absensi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_absensi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Absensi', 'url'=>array('admin')),
);
?>

<h1>View Absensi #<?php echo $model->id_absensi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_absensi',
		'id_daftar_kelas',
		'nis',
		'tanggal',
		'status',
		'keterangan',
	),
)); ?>

