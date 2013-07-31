<?php
/* @var $this DaftarKelasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Kelases',
);

//$this->menu=array(
//	array('label'=>'Create DaftarKelas', 'url'=>array('create')),
//	array('label'=>'Manage DaftarKelas', 'url'=>array('admin')),
//);
?>

<h2>Daftar Kelas</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Daftar Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Daftar Kelas</span>
</a>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
