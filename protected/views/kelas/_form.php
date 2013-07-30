<?php
/* @var $this KelasController */
/* @var $model Kelas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kelas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kelas'); ?>
		<?php echo $form->textField($model,'id_kelas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_kelas'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'nama_kelas'); ?>
		<?php echo $form->textField($model,'nama_kelas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nama_kelas'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->