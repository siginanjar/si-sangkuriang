<?php
/* @var $this NilaiController */
/* @var $model Nilai */

$this->breadcrumbs=array(
	'Nilais'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nilai', 'url'=>array('index')),
	array('label'=>'Create Nilai', 'url'=>array('create')),
	array('label'=>'View Nilai', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nilai', 'url'=>array('admin')),
);
?>

<h2>Perbarui Nilai <?php echo $model->id; ?></h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/create" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>Daftar Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/view" class="btn btn-danger">
    <i class="icon-file"></i>
    &nbsp;
    <span>Lihat Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Nilai</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>