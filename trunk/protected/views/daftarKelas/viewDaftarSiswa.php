<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */

$this->breadcrumbs=array(
	'Daftar Kelases'=>array('index'),
	$model->id_daftar_kelas,
);


//$this->menu=array(
//	array('label'=>'List DaftarKelas', 'url'=>array('index')),
//	array('label'=>'Create DaftarKelas', 'url'=>array('create')),
//	array('label'=>'Update DaftarKelas', 'url'=>array('update', 'id'=>$model->id_daftar_kelas)),
//	array('label'=>'Delete DaftarKelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_daftar_kelas),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage DaftarKelas', 'url'=>array('admin')),
//);
?>

<h2>Lihat Siswa Daftar Kelas #<?php echo $model->nama_daftar_kelas; ?></h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelasSiswa/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Siswa</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelasSiswa/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Daftar Kelas Siswa</span>
</a>


<?php $form=$this->beginwidget('CActiveForm', array()); ?>
<?php $this->widget('zii.widgets.grid.CGridView',array(
    'id'=>'daftarKelasSiswa-grid',
    'dataProvider'=>$allt->search(),
    'emptyText'=>'Belum ada siswa yang terdaftar',
    'summaryText'=>'',
    'columns'=>array(
        array(
                'name'=>'nis',
                'type'=>'raw',
                'value'=>'$data->nis',
        ),
        array(
                'class' => 'CButtonColumn',
                'template' => '{update},{delete}',
                'buttons' => array(
                    'update' => array(
                        'url'=>'Yii::app()->createUrl("daftarKelasSiswa/update/$data->id")',
                    ),
                    'delete' => array(
                        'url'=>'Yii::app()->createUrl("daftarKelasSiswa/update/$data->id")',
                    ),
                ),
            ),
        ),
)); ?>

<?php $this->endWidget();?>