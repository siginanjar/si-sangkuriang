<?php
/* @var $this NilaiController */
/* @var $model Nilai */

$this->breadcrumbs=array(
	'Nilais'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Nilai', 'url'=>array('index')),
//	array('label'=>'Create Nilai', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('nilai-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Kelola Nilai</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/index" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Daftar Nilai</span>
</a>

<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		'id_daftar_kelas',
//                'id_kelas',
//                'tahun_ajaran',
//                'nip',
//	),
//)); ?>


<?php echo CHtml::link('Pencarian','#',array('class'=>'btn btn-danger search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nilai-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'nis',
                'id_mata_pelajaran',
                'id_daftar_kelas',
		'nilai_ulangan1',
		'nilai_ulangan2',
		'nilai_ulangan3',
		'nilai_uts',
		'nilai_uas',
		'nilai_akhir',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
