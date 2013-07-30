<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List TahunAjaran', 'url'=>array('index')),
//	array('label'=>'Manage TahunAjaran', 'url'=>array('admin')),
//);
?>

<h2>Tambah Tahun Ajaran</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>Daftar Tahun Ajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Tahun Ajaran</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>