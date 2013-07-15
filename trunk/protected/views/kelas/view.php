<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	$model->id_kelas,
);

$this->menu=array(
	array('label'=>'List Kelas', 'url'=>array('index')),
	array('label'=>'Create Kelas', 'url'=>array('create')),
	array('label'=>'Update Kelas', 'url'=>array('update', 'id'=>$model->id_kelas)),
	array('label'=>'Delete Kelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kelas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<h1>View Kelas #<?php echo $model->id_kelas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kelas',
		'nama_kelas',
	),
)); ?>
