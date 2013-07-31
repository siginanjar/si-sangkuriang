<?php
/* @var $this NilaiController */
/* @var $model Nilai */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nilai-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_daftar_kelas'); ?>
		<?php echo $form->dropDownList($model,'id_daftar_kelas',$model->getDaftarKelas(),array('empty'=>'--Pilih Kategori Daftar Kelas--')); ?>
		<?php echo $form->error($model,'id_daftar_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mata_pelajaran'); ?>
		<?php echo $form->dropDownList($model,'id_mata_pelajaran',$model->getMataPelajaran(),array('empty'=>'--Pilih Mata Pelajaran--')); ?>
		<?php echo $form->error($model,'id_mata_pelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nis'); ?>
		<?php echo $form->dropDownList($model,'nis',$model->getSiswa(),array('empty'=>'--Pilih Siswa--')); ?>
		<?php echo $form->error($model,'nis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_ulangan1'); ?>
		<?php echo $form->textField($model,'nilai_ulangan1'); ?>
		<?php echo $form->error($model,'nilai_ulangan1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_ulangan2'); ?>
		<?php echo $form->textField($model,'nilai_ulangan2'); ?>
		<?php echo $form->error($model,'nilai_ulangan2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_ulangan3'); ?>
		<?php echo $form->textField($model,'nilai_ulangan3'); ?>
		<?php echo $form->error($model,'nilai_ulangan3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_uts'); ?>
		<?php echo $form->textField($model,'nilai_uts'); ?>
		<?php echo $form->error($model,'nilai_uts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_uas'); ?>
		<?php echo $form->textField($model,'nilai_uas'); ?>
		<?php echo $form->error($model,'nilai_uas'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->