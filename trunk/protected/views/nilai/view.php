<?php
/* @var $this NilaiController */
/* @var $model Nilai */

$this->breadcrumbs=array(
	'Nilais'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nilai', 'url'=>array('index')),
	array('label'=>'Create Nilai', 'url'=>array('create')),
	array('label'=>'Update Nilai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nilai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nilai', 'url'=>array('admin')),
);
?>

<h1>View Nilai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_daftar_kelas',
		'id_mata_pelajaran',
		'nis',
		'nilai_ulangan1',
		'nilai_ulangan2',
		'nilai_ulangan3',
		'nilai_uts',
		'nilai_uas',
		'nilai_akhir',
	),
)); ?>
