<?php
/* @var $this AbsensiController */
/* @var $model Absensi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'absensi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_daftar_kelas'); ?>
		<?php echo $form->textField($model,'id_daftar_kelas',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_daftar_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nis'); ?>
		<?php echo $form->dropDownList($model,'nis',$model->getSiswa()); ?>
		<?php echo $form->error($model,'nis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->radioButtonList($model,'status',array('Hadir'=>'Hadir','Sakit'=>'Sakit','Alpha'=>'Alpha','Izin'=>'Izin')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->