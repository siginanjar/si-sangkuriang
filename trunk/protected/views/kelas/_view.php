<?php
/* @var $this KelasController */
/* @var $data Kelas */
?>

<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id_kelas')); ?>:</b>
	<?php //echo CHtml::link(CHtml::encode($data->id_kelas), array('view', 'id'=>$data->id_kelas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kelas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama_kelas),array('view', 'id'=>$data->id_kelas)); ?>
	<br />


</div>