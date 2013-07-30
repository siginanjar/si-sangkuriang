<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'Create TahunAjaran', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tahun-ajaran-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Kelola Tahun Ajaran</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Tahun Ajaran</span>
</a>

<?php echo CHtml::link('Pencarian','#',array('class'=>'btn btn-danger search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tahun-ajaran-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'tahun_ajaran',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
