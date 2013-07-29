<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage MataPelajaran', 'url'=>array('admin')),
);
?>

<h1>Create MataPelajaran</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>