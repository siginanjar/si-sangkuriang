<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'Manage Kelas', 'url'=>array('admin')),
//);
?>

<h2>Tambah Kelas</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Kelas</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>