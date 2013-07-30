<?php
/* @var $this GuruController */
/* @var $model Guru */

$this->breadcrumbs=array(
	'Gurus'=>array('index'),
	$model->nip=>array('view','id'=>$model->nip),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Guru', 'url'=>array('create')),
	array('label'=>'View Guru', 'url'=>array('view', 'id'=>$model->nip)),
	array('label'=>'Manage Guru', 'url'=>array('admin')),
);
?>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Guru</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/admin" class="btn btn-danger">
    <i class="icon-file"></i>
    &nbsp;
    <span>View Guru</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Guru</span>
</a>

<h1>Update Guru <?php echo $model->nip; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>