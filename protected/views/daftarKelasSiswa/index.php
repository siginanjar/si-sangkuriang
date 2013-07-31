<?php
/* @var $this DaftarKelasSiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Kelas Siswas',
);

$this->menu=array(
	array('label'=>'Create DaftarKelasSiswa', 'url'=>array('create')),
	array('label'=>'Manage DaftarKelasSiswa', 'url'=>array('admin')),
);
?>

<h1>Daftar Kelas Siswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
