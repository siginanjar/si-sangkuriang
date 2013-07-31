<?php
/* @var $this DaftarKelasSiswaController */
/* @var $model DaftarKelasSiswa */

$this->breadcrumbs=array(
	'Daftar Kelas Siswas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DaftarKelasSiswa', 'url'=>array('index')),
	array('label'=>'Create DaftarKelasSiswa', 'url'=>array('create')),
	array('label'=>'View DaftarKelasSiswa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DaftarKelasSiswa', 'url'=>array('admin')),
);
?>

<h1>Update DaftarKelasSiswa <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>