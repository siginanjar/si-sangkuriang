<?php
/* @var $this NilaiController */
/* @var $model Nilai */

$this->breadcrumbs=array(
	'Nilais'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Nilai', 'url'=>array('index')),
//	array('label'=>'Manage Nilai', 'url'=>array('admin')),
//);
?>

<h2>Tambah Nilai</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>Daftar Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Nilai</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>