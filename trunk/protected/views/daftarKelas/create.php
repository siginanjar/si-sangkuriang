<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */

$this->breadcrumbs=array(
	'Daftar Kelases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DaftarKelas', 'url'=>array('index')),
	array('label'=>'Manage DaftarKelas', 'url'=>array('admin')),
);
?>

<h1>Create DaftarKelas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>