<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'Manage MataPelajaran', 'url'=>array('admin')),
//);
?>

<h2>Tambah Mata Pelajaran</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Mata Pelajaran</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>