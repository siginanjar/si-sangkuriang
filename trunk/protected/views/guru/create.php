<?php
/* @var $this GuruController */
/* @var $model Guru */

$this->breadcrumbs=array(
	'Gurus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Guru', 'url'=>array('index')),
	array('label'=>'Manage Guru', 'url'=>array('admin')),
);
?>

<h1>Create Guru</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>