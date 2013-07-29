<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */

$this->breadcrumbs=array(
	'Daftar Kelases'=>array('index'),
	$allt->id_kelas,
);

$this->menu=array(
	array('label'=>'Create DaftarKelas', 'url'=>array('create')),
	array('label'=>'Update DaftarKelas', 'url'=>array('update', 'id'=>$model->id_daftar_kelas)),
	array('label'=>'Delete DaftarKelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_daftar_kelas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DaftarKelas', 'url'=>array('admin')),
);
?>

<h1>View DaftarKelas #<?php echo $allt->id_kelas; ?></h1>

<?php
//$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		'id_daftar_kelas',
//		'nama_daftar_kelas',
//		'id_kelas',
//		'tahun_ajaran',
//		'nip',
//		'jumlah_pertemuan',
//	),
//)); 
?>


<?php $form=$this->beginwidget('CActiveForm', array()); ?>
<?php $this->widget('zii.widgets.grid.CGridView',array(
    'id'=>'daftarKelas-grid',
    'dataProvider'=>$allt->search(),
    'emptyText'=>'Belum ada daftar kelas yang terdaftar',
    'summaryText'=>'',
    'columns'=>array(
        array(
                'name'=>'Nama Daftar Kelas',
                'type'=>'raw',
                'value'=>'$data->nama_daftar_kelas',
        ),
        array(
                'name'=>'Absensi',
                'type'=>'raw',
                'value'=>'CHtml::link("absensi", array("../index.php/absensi/$data->id_daftar_kelas"))'
        ),
        array(
                'name'=>'Nilai',
                'type'=>'raw',
                'value'=>'CHtml::link("Nilai", array("../index.php/nilai/$data->id_daftar_kelas"))'
        ),
        array(
                'class' => 'CButtonColumn',
                'template' => '{view},{update},{delete}',
                'buttons' => array(
                    'view' => array(
                        'url'=>'Yii::app()->createUrl("daftarKelas/$data->id_kelas?daftarKelasSiswa=$data->id_daftar_kelas")',
                    ),
                    'update' => array(
                        'url'=>'Yii::app()->createUrl("daftarKelas/$data->id_kelas?daftarKelasSiswa=$data->id_daftar_kelas")',
                    ),
                    'delete' => array(
                        'url'=>'Yii::app()->createUrl("daftarKelas/$data->id_kelas?daftarKelasSiswa=$data->id_daftar_kelas")',
                    ),
                ),
            ),
        ),
)); ?>

<?php $this->endWidget();?>