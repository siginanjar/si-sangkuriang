<?php
/* @var $this DaftarKelasSiswaController */
/* @var $model DaftarKelasSiswa */

$this->breadcrumbs=array(
	'Daftar Kelas Siswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DaftarKelasSiswa', 'url'=>array('index')),
	array('label'=>'Manage DaftarKelasSiswa', 'url'=>array('admin')),
);
?>

<h1>Create DaftarKelasSiswa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>