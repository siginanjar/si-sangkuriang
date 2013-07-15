<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */

$this->breadcrumbs=array(
	'Daftar Kelases'=>array('index'),
	$model->id_daftar_kelas,
);

$this->menu=array(
	array('label'=>'List DaftarKelas', 'url'=>array('index')),
	array('label'=>'Create DaftarKelas', 'url'=>array('create')),
	array('label'=>'Update DaftarKelas', 'url'=>array('update', 'id'=>$model->id_daftar_kelas)),
	array('label'=>'Delete DaftarKelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_daftar_kelas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DaftarKelas', 'url'=>array('admin')),
);
?>

<h1>View DaftarKelas #<?php echo $model->id_daftar_kelas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_daftar_kelas',
		'id_kelas',
		'nis',
		'tahun_ajaran',
		'nip',
	),
)); ?>
