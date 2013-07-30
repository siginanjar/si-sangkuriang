<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */

$this->breadcrumbs=array(
	'Daftar Kelases'=>array('index'),
	$model->id_daftar_kelas=>array('view','id'=>$model->id_daftar_kelas),
	'Update',
);

$this->menu=array(
	array('label'=>'List DaftarKelas', 'url'=>array('index')),
	array('label'=>'Create DaftarKelas', 'url'=>array('create')),
	array('label'=>'View DaftarKelas', 'url'=>array('view', 'id'=>$model->id_daftar_kelas)),
	array('label'=>'Manage DaftarKelas', 'url'=>array('admin')),
);
?>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>List Daftar Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Daftar Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/view" class="btn btn-danger">
    <i class="icon-file"></i>
    &nbsp;
    <span>View Daftar Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Daftar Kelas</span>
</a>

<h1>Update DaftarKelas <?php echo $model->id_daftar_kelas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>