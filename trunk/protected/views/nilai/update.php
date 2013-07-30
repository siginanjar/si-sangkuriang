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

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/create" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>List Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/view" class="btn btn-danger">
    <i class="icon-file"></i>
    &nbsp;
    <span>View Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Nilai</span>
</a>

<h1>Update Nilai <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>