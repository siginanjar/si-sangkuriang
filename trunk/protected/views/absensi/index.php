<?php
/* @var $this AbsensiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Absensis',
);

//$this->menu=array(
//	array('label'=>'Create Absensi', 'url'=>array('create')),
//	array('label'=>'Manage Absensi', 'url'=>array('admin')),
//);
?>

<h1>Absensis</h1>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/create" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>Create Absensi</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/admin" class="btn btn-danger">
    <i class="icon-edit"></i>
    &nbsp;
    <span>Manage Absensi</span>
</a>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
