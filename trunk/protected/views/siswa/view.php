<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswas'=>array('index'),
	$model->nis,
);

$this->menu=array(
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'Update Siswa', 'url'=>array('update', 'id'=>$model->nis)),
	array('label'=>'Delete Siswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>View Siswa #<?php echo $model->nis; ?></h1>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Siswa</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Siswa</span>
</a>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nis',
		'nama_siswa',
		'tempat_lahir',
		'tanggal_lahir',
		'agama',
		'alamat',
		'tahun_ajaran',
		'nama_wali',
		'no_tlpn_wali',
		'sekolah_asal',
	),
)); ?>
