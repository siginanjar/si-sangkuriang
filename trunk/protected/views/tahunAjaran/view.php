
<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

$this->breadcrumbs=array(
        'Tahun Ajarans'=>array('index'),
        $model->id,
);

//$this->menu=array(
//        array('label'=>'Create TahunAjaran', 'url'=>array('create')),
//        array('label'=>'Update TahunAjaran', 'url'=>array('update', 'id'=>$model->id)),
//        array('label'=>'Delete TahunAjaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//        array('label'=>'Manage TahunAjaran', 'url'=>array('admin')),
//);
?>

<h2>Lihat TahunAjaran #<?php echo $model->id; ?></h2>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/create" class="btn btn-danger">
    <i class="icon-plus-sign"></i>
    &nbsp;
    <span>Tambah Tahun Ajaran</span>
</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/admin" class="btn btn-danger">
    <i class="icon-book"></i>
    &nbsp;
    <span>Kelola Tahun Ajaran</span>
</a>

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
                //'id',
                'tahun_ajaran',
        ),
)); ?>