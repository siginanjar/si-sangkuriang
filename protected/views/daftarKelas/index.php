<?php
/* @var $this DaftarKelasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Kelases',
);

$this->menu=array(
	array('label'=>'Create DaftarKelas', 'url'=>array('create')),
	array('label'=>'Manage DaftarKelas', 'url'=>array('admin')),
);
?>

<h1>Daftar Kelases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
