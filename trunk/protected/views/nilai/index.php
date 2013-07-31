<?php
/* @var $this NilaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nilais',
);

//$this->menu=array(
//	array('label'=>'Create Nilai', 'url'=>array('create')),
//	array('label'=>'Manage Nilai', 'url'=>array('admin')),
//);
?>

<h2>Nilai</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Nilai</span>
</a>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
