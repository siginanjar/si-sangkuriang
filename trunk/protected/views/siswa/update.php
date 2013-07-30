<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswas'=>array('index'),
	$model->nis=>array('view','id'=>$model->nis),
	'Update',
);

/*$this->menu=array(
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'View Siswa', 'url'=>array('view', 'id'=>$model->nis)),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);*/
?>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Siswa</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/admin" class="btn btn-danger">
    <i class="icon-file"></i>
    &nbsp;
    <span>View Siswa</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Siswa</span>
</a>

<h1>Update Siswa <?php echo $model->nis; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>