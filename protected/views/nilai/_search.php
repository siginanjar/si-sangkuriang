<?php
/* @var $this NilaiController */
/* @var $model Nilai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_daftar_kelas'); ?>
		<?php echo $form->textField($model,'id_daftar_kelas',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mata_pelajaran'); ?>
		<?php echo $form->textField($model,'id_mata_pelajaran',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nis'); ?>
		<?php echo $form->textField($model,'nis',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_ulangan1'); ?>
		<?php echo $form->textField($model,'nilai_ulangan1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_ulangan2'); ?>
		<?php echo $form->textField($model,'nilai_ulangan2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_ulangan3'); ?>
		<?php echo $form->textField($model,'nilai_ulangan3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_uts'); ?>
		<?php echo $form->textField($model,'nilai_uts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_uas'); ?>
		<?php echo $form->textField($model,'nilai_uas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_akhir'); ?>
		<?php echo $form->textField($model,'nilai_akhir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->