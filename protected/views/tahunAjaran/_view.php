<?php
/* @var $this TahunAjaranController */
/* @var $data TahunAjaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_ajaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tahun_ajaran), array('view', 'id'=>$data->tahun_ajaran)); ?>
	<br />


</div>