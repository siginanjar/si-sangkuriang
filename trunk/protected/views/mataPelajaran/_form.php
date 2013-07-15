<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mata-pelajaran-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mata_pelajaran'); ?>
		<?php echo $form->textField($model,'id_mata_pelajaran',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_mata_pelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pelajaran'); ?>
		<?php echo $form->textField($model,'nama_pelajaran',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nama_pelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kelas'); ?>
		<?php echo $form->textField($model,'id_kelas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'km_metpel'); ?>
		<?php echo $form->textField($model,'km_metpel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'km_metpel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->