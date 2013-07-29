<?php
/* @var $this MataPelajaranController */
/* @var $data MataPelajaran */
?>

<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pelajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->id_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('km_metpel')); ?>:</b>
	<?php echo CHtml::encode($data->km_metpel); ?>
	<br />


</div>