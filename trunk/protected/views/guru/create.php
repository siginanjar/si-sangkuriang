<?php
/* @var $this GuruController */
/* @var $model Guru */

$this->breadcrumbs=array(
	'Gurus'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'Manage Guru', 'url'=>array('admin')),
//);
?>

<h2>Tambah Guru</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Guru</span>
</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>