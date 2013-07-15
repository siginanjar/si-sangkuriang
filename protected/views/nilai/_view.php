<?php
/* @var $this NilaiController */
/* @var $data Nilai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_daftar_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->id_daftar_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mata_pelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->id_mata_pelajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nis')); ?>:</b>
	<?php echo CHtml::encode($data->nis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_ulangan1')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_ulangan1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_ulangan2')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_ulangan2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_ulangan3')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_ulangan3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_uts')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_uts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_uas')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_uas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_akhir); ?>
	<br />

	*/ ?>

</div>