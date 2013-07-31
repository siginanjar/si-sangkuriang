<?php
/* @var $this DaftarKelasController */
/* @var $model DaftarKelas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daftar-kelas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'nama_daftar_kelas'); ?>
		<?php echo $form->textField($model,'nama_daftar_kelas',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nama_daftar_kelas'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'id_kelas'); ?>
		<?php echo $form->dropDownList($model,'id_kelas',$model->getKelas()); ?>
		<?php echo $form->error($model,'id_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_ajaran'); ?>
		<?php echo $form->dropDownList($model,'tahun_ajaran',$model->getTahunAjaran()); ?>
		<?php echo $form->error($model,'tahun_ajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->dropDownList($model,'nip',$model->getGuru()); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_pertemuan'); ?>
		<?php echo $form->textField($model,'jumlah_pertemuan'); ?>
		<?php echo $form->error($model,'jumlah_pertemuan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->