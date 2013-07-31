<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	$model->id,
);

//$this->menu=array(
//	array('label'=>'Create MataPelajaran', 'url'=>array('create')),
//	array('label'=>'Update MataPelajaran', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete MataPelajaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage MataPelajaran', 'url'=>array('admin')),
//);
?>

<h2>Lihat Mata Pelajaran #<?php echo $model->id; ?></h1>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Mata Pelajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Upadate Mata Pelajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Mata Pelajaran</span>
</a>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nama_pelajaran',
		'id_kelas',
		'km_metpel',
	),
)); ?>
