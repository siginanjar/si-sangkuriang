<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'Create MataPelajaran', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mata-pelajaran-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Kelelola Mata Pelajaran</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Mata Pelajaran</span>
</a>

<?php echo CHtml::link('Pencarian','#',array('class'=>'btn btn-danger search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mata-pelajaran-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'nama_pelajaran',
		'id_kelas',
		'km_metpel',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
