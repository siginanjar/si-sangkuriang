<?php
/* @var $this DaftarKelasController */
/* @var $data DaftarKelas */
?>

<div class="view">

        <b><?php //echo CHtml::encode($data->getAttributeLabel('nama_kelas')); ?></b>
            <?php echo CHtml::link(CHtml::encode($data->nama_kelas),array('view', 'id'=>$data->id_kelas)); ?>
            <br />
        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_daftar_kelas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_daftar_kelas), array('view', 'id'=>$data->id_daftar_kelas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_daftar_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->nama_daftar_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->id_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_ajaran')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_ajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::encode($data->nip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_pertemuan')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_pertemuan); ?>
	<br />
         * 
         */?>



</div>