<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tahun-ajaran-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_ajaran'); ?>
		<?php echo $form->textField($model,'tahun_ajaran',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tahun_ajaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->