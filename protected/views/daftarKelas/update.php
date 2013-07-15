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

<h1>Update DaftarKelas <?php echo $model->id_daftar_kelas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>