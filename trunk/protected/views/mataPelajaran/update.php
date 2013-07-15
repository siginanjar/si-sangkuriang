<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	$model->id_mata_pelajaran=>array('view','id'=>$model->id_mata_pelajaran),
	'Update',
);

$this->menu=array(
	array('label'=>'List MataPelajaran', 'url'=>array('index')),
	array('label'=>'Create MataPelajaran', 'url'=>array('create')),
	array('label'=>'View MataPelajaran', 'url'=>array('view', 'id'=>$model->id_mata_pelajaran)),
	array('label'=>'Manage MataPelajaran', 'url'=>array('admin')),
);
?>

<h1>Update MataPelajaran <?php echo $model->id_mata_pelajaran; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>