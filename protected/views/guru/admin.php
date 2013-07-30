<?php
/* @var $this GuruController */
/* @var $model Guru */

$this->breadcrumbs=array(
	'Gurus'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'Create Guru', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('guru-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gurus</h1>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Guru</span>
</a>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'btn btn-danger search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'guru-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nip',
		'nama_guru',
		'tempat_lahir',
		'tanggal_lahir',
		'golongan',
		'spesialisai',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
