<?php
/* @var $this DaftarKelasSiswaController */
/* @var $model DaftarKelasSiswa */

$this->breadcrumbs=array(
	'Daftar Kelas Siswas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DaftarKelasSiswa', 'url'=>array('index')),
	array('label'=>'Create DaftarKelasSiswa', 'url'=>array('create')),
	array('label'=>'Update DaftarKelasSiswa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DaftarKelasSiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DaftarKelasSiswa', 'url'=>array('admin')),
);
?>

<h1>View DaftarKelasSiswa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_daftar_kelas',
		'nis',
	),
)); ?>
