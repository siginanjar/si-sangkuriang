<?php
/* @var $this AbsensiController */
/* @var $model Absensi */

$this->breadcrumbs=array(
	'Absensis'=>array('index'),
	$model->id_absensi=>array('view','id'=>$model->id_absensi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Absensi', 'url'=>array('index')),
	array('label'=>'Create Absensi', 'url'=>array('create')),
	array('label'=>'View Absensi', 'url'=>array('view', 'id'=>$model->id_absensi)),
	array('label'=>'Manage Absensi', 'url'=>array('admin')),
);
?>

<h1>Update Absensi <?php echo $model->id_absensi; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>