<?php
/* @var $this GuruController */
/* @var $data Guru */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nip), array('view', 'id'=>$data->nip)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_guru')); ?>:</b>
	<?php echo CHtml::encode($data->nama_guru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('golongan')); ?>:</b>
	<?php echo CHtml::encode($data->golongan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spesialisai')); ?>:</b>
	<?php echo CHtml::encode($data->spesialisai); ?>
	<br />


</div>