<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	$model->id_kelas=>array('view','id'=>$model->id_kelas),
	'Update',
);

//$this->menu=array(
//	array('label'=>'Create Kelas', 'url'=>array('create')),
//	array('label'=>'View Kelas', 'url'=>array('view', 'id'=>$model->id_kelas)),
//	array('label'=>'Manage Kelas', 'url'=>array('admin')),
//);
?>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/admin" class="btn btn-danger">
    <i class="icon-file"></i>
    &nbsp;
    <span>View Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Kelas</span>
</a>

<h1>Update Kelas <?php echo $model->id_kelas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>