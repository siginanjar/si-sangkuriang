<?php
/* @var $this AbsensiController */
/* @var $data Absensi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_absensi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_absensi), array('view', 'id'=>$data->id_absensi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_daftar_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->id_daftar_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nis')); ?>:</b>
	<?php echo CHtml::encode($data->nis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>