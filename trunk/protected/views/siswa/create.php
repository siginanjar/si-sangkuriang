<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswas'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Siswa', 'url'=>array('index')),
//	array('label'=>'Manage Siswa', 'url'=>array('admin')),
//);
?>

<h2>Tambah Siswa</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>Daftar Siswa</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Siswa</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>