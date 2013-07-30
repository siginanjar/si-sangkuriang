<?php
/* @var $this NilaiController */
/* @var $model Nilai */

$this->breadcrumbs=array(
	'Nilais'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nilai', 'url'=>array('index')),
	array('label'=>'Create Nilai', 'url'=>array('create')),
	array('label'=>'Update Nilai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nilai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nilai', 'url'=>array('admin')),
);
?>

<h1>View Nilai Siswa Kelas#<?php echo $model->id; ?></h1>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Nilai</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Manage Nilai</span>
</a>

<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_daftar_kelas',
		'id_mata_pelajaran',
		'nis',
		'nilai_ulangan1',
		'nilai_ulangan2',
		'nilai_ulangan3',
		'nilai_uts',
		'nilai_uas',
		'nilai_akhir',
	),
)); 
?>


<?php $form=$this->beginwidget('CActiveForm', array(
)); 
$modol = "90";?>
<?php $this->widget('zii.widgets.grid.CGridView',array(
    'id'=>'daftarKelas-grid',
    'dataProvider'=>$allt->search(),
    'emptyText'=>'Belum ada daftar kelas yang terdaftar',
    'summaryText'=>'',
    'columns'=>array(
        array(
                'name'=>'Mata Pelajaran',
                'type'=>'raw',
                'value'=>'$data->id_mata_pelajaran',
        ),
        array(
                'name'=>'Ulangan 1',
                'type'=>'raw',
                'value'=>'$data->nilai_ulangan1',
        ),
        array(
                'name'=>'Ulangan 2',
                'type'=>'raw',
                'value'=>'$data->nilai_ulangan2',
        ),
        array(
                'name'=>'Ulangan 3',
                'type'=>'raw',
                'value'=>'$data->nilai_ulangan3',
        ),
        array(
                'name'=>'UTS',
                'type'=>'raw',
                'value'=>'$data->nilai_uts',
        ),
        array(
                'name'=>'UAS',
                'type'=>'raw',
                'value'=>'$data->id_kelas',
        ),
        array(
                'name'=>'Nilai Akhir',
                'type'=>'raw',
                'value'=>'$data->nilai_akhir',
        ),
        array(
                'class' => 'CButtonColumn',
                'template' => '{view}',
                'buttons' => array(
                    'view' => array(
                        'url'=>'Yii::app()->createUrl("nilai/update/$data->id")',
                    ),
//                    'delete' => array(
//                        'url'=>'Yii::app()->createUrl("nilai/delete/$data->id")',
//                    ),
                ),
            ),
        ),
)); ?>

<?php $this->endWidget();?>