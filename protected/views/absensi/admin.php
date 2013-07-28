<?php
/* @var $this AbsensiController */
/* @var $model Absensi */

$this->breadcrumbs=array(
	'Absensis'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Absensi', 'url'=>array('index')),
//	array('label'=>'Create Absensi', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('absensi-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Absensis</h1>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>List Absensi</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/create" class="btn btn-danger">
    <i class="icon-edit"></i>
    &nbsp;
    <span>Create Absensi</span>
</a>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'btn btn-danger search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'absensi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_absensi',
		'id_daftar_kelas',
		'nis',
		'tanggal',
		'status',
		'keterangan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
