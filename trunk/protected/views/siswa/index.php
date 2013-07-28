<?php
/* @var $this SiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Siswas',
);

//$this->menu=array(
//	array('label'=>'Create Siswa', 'url'=>array('create')),
//	array('label'=>'Manage Siswa', 'url'=>array('admin')),
//);

?>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Create Siswa</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/admin" class="btn btn-danger">
    <i class="icon-edit"></i>
    &nbsp;
    <span>Manage Siswa</span>
</a>

<!--
<div class="page-header">
<h2>Siswas</h2>
</div>
-->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
    'columns'=>array(
        'nis',
        'nama_siswa',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'alamat',
        'tahun_ajaran',
    ),
	//'itemView'=>'_view',
)); ?>