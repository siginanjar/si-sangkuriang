<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List TahunAjaran', 'url'=>array('index')),
//	array('label'=>'Create TahunAjaran', 'url'=>array('create')),
//	array('label'=>'View TahunAjaran', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage TahunAjaran', 'url'=>array('admin')),
//);
?>

<h2>Perbarui Tahun Ajaran <?php echo $model->id; ?></h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>Daftar Tahun Ajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Tahun Ajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/view" class="btn btn-danger">
    <i class="icon-file"></i>
    &nbsp;
    <span>Lihat Tahun Ajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Tahun Ajaran</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>