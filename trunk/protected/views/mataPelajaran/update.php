<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
//	array('label'=>'Create MataPelajaran', 'url'=>array('create')),
//	array('label'=>'View MataPelajaran', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage MataPelajaran', 'url'=>array('admin')),
//);
?>

<h2>Update MataPelajaran <?php echo $model->id; ?></h2>


<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Mata Pelajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/view" class="btn btn-danger">
    <i class="icon-file"></i>
    &nbsp;
    <span>Lihat Mata Pelajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Mata Pelajaran</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>