<?php
/* @var $this GuruController */
/* @var $model Guru */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guru-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_guru'); ?>
		<?php echo $form->textField($model,'nama_guru',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nama_guru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
		<?php 
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'attribute' => 'tanggal_lahir',
                        'model'=>$model,
                        // additional javascript options for the date picker plugin
                        'options' => array(
                            'showAnim' => 'fold',
                        ),
                        'options' => array(
                            'value'=> date('Y-m-d'),
                            'dateFormat'=>'yy-mm-dd',
                            'style' => 'height:20px;'
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'golongan'); ?>
		<?php echo $form->textField($model,'golongan',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'golongan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spesialisasi'); ?>
		<?php echo $form->dropDownList($model,'spesialisai',array(''=>'--Silakan Pilih--', 'Pend. Agama Islam'=>'Pend. Agama Islam','Pend. Olahraga & Jasmani'=>'Pend. Olahraga & Jasmani','Bahasa Inggris'=>'Bahasa Inggris','Bahasa Sunda'=>'Bahasa Sunda')); ?>
		<?php echo $form->error($model,'spesialisai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->