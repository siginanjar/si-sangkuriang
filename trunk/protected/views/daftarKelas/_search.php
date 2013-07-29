<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php //echo $form->label($model,'id_daftar_kelas'); ?>
		<?php //echo $form->textField($model,'id_daftar_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_daftar_kelas'); ?>
		<?php echo $form->textField($model,'nama_daftar_kelas',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kelas'); ?>
		<?php echo $form->textField($model,'id_kelas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_ajaran'); ?>
		<?php echo $form->textField($model,'tahun_ajaran',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_pertemuan'); ?>
		<?php echo $form->textField($model,'jumlah_pertemuan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->