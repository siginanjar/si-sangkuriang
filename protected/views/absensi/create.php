<?php
/* @var $this AbsensiController */
/* @var $model Absensi */

$this->breadcrumbs=array(
	'Absensis'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Absensi', 'url'=>array('index')),
//	array('label'=>'Manage Absensi', 'url'=>array('admin')),
//);
?>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>List Absensi</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/admin" class="btn btn-danger">
    <i class="icon-edit"></i>
    &nbsp;
    <span>Manage Absensi</span>
</a>

<h1>Create Absensi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>