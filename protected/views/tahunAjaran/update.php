<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	$model->tahun_ajaran=>array('view','id'=>$model->tahun_ajaran),
	'Update',
);

$this->menu=array(
	array('label'=>'List TahunAjaran', 'url'=>array('index')),
	array('label'=>'Create TahunAjaran', 'url'=>array('create')),
	array('label'=>'View TahunAjaran', 'url'=>array('view', 'id'=>$model->tahun_ajaran)),
	array('label'=>'Manage TahunAjaran', 'url'=>array('admin')),
);
?>

<h1>Update TahunAjaran <?php echo $model->tahun_ajaran; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>