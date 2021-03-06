<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'Create Kelas', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('kelas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Kelola Kelas</h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Kelas</span>
</a>

<?php echo CHtml::link('Pencarian','#',array('class'=>'btn btn-danger search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kelas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_kelas',
		'nama_kelas',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
