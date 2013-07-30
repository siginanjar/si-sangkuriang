<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */

$this->breadcrumbs=array(
	'Daftar Kelases'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List DaftarKelas', 'url'=>array('index')),
//	array('label'=>'Create DaftarKelas', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('daftar-kelas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Kelola Daftar Kelas</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/index" class="btn btn-danger">
    <i class="icon-list"></i>
    &nbsp;
    <span>List Daftar Kelas</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Daftar Kelas</span>
</a>

<?php echo CHtml::link('Pencarian','#',array('class'=>'btn btn-danger search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'daftar-kelas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_daftar_kelas',
		'nama_daftar_kelas',
		'id_kelas',
		'tahun_ajaran',
		'nip',
		'jumlah_pertemuan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
