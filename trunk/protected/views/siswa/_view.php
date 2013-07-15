<?php
/* @var $this SiswaController */
/* @var $data Siswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nis), array('view', 'id'=>$data->nis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_siswa')); ?>:</b>
	<?php echo CHtml::encode($data->nama_siswa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama')); ?>:</b>
	<?php echo CHtml::encode($data->agama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_ajaran')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_ajaran); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_wali')); ?>:</b>
	<?php echo CHtml::encode($data->nama_wali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_tlpn_wali')); ?>:</b>
	<?php echo CHtml::encode($data->no_tlpn_wali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sekolah_asal')); ?>:</b>
	<?php echo CHtml::encode($data->sekolah_asal); ?>
	<br />

	*/ ?>

</div>