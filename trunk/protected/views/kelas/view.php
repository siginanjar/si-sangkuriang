<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	$model->id_kelas,
);

$this->menu=array(
	array('label'=>'Create Kelas', 'url'=>array('create')),
	array('label'=>'Update Kelas', 'url'=>array('update', 'id'=>$model->id_kelas)),
	array('label'=>'Delete Kelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kelas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/update" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Perbarui Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Kelas</span>
</a>

<h2>Lihat Kelas #<?php echo $model->id_kelas; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_kelas',
		'nama_kelas',
	),
)); ?>
