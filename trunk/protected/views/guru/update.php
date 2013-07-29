<?php
/* @var $this GuruController */
/* @var $model Guru */

$this->breadcrumbs=array(
	'Gurus'=>array('index'),
	$model->nip=>array('view','id'=>$model->nip),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Guru', 'url'=>array('create')),
	array('label'=>'View Guru', 'url'=>array('view', 'id'=>$model->nip)),
	array('label'=>'Manage Guru', 'url'=>array('admin')),
);
?>

<h1>Update Guru <?php echo $model->nip; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>