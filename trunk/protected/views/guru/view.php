<?php
/* @var $this GuruController */
/* @var $model Guru */

$this->breadcrumbs=array(
	'Gurus'=>array('index'),
	$model->nip,
);

$this->menu=array(
	array('label'=>'Create Guru', 'url'=>array('create')),
	array('label'=>'Update Guru', 'url'=>array('update', 'id'=>$model->nip)),
	array('label'=>'Delete Guru', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nip),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Guru', 'url'=>array('admin')),
);
?>

<h1>View Guru #<?php echo $model->nip; ?></h1>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Guru</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Guru</span>
</a>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nip',
		'nama_guru',
		'tempat_lahir',
		'tanggal_lahir',
		'golongan',
		'spesialisai',
	),
)); ?>
