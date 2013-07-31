<?php
/* @var $this DaftarKelasSiswaController */
/* @var $data DaftarKelasSiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_daftar_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->id_daftar_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nis')); ?>:</b>
	<?php echo CHtml::encode($data->nis); ?>
	<br />


</div>