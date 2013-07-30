<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */

$this->breadcrumbs=array(
	'Daftar Kelases'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List DaftarKelas', 'url'=>array('index')),
//	array('label'=>'Manage DaftarKelas', 'url'=>array('admin')),
//);
?>

<h2>Tambah Daftar Kelas</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>List Daftar Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Daftar Kelas</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>