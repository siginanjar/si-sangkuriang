<?php
/* @var $this SiswaController */
/* @var $model Siswa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'siswa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <table>
        <tr>
            <td><?php echo $form->labelEx($model,'nis'); ?></td>
            <td>
                <?php echo $form->textField($model,'nis',array('size'=>8,'maxlength'=>8)); ?>
                <?php echo $form->error($model,'nis'); ?>
            </td>
        </tr>
        
        <tr>
            <td><?php echo $form->labelEx($model,'nama_siswa'); ?></td>
            <td>
                <?php echo $form->textField($model,'nama_siswa',array('size'=>50,'maxlength'=>50)); ?>
                <?php echo $form->error($model,'nama_siswa'); ?>
            </td>
        </tr>
	
    	<tr>
    		<td><?php echo $form->labelEx($model,'tempat_lahir'); ?></td>
    		<td>
                <?php echo $form->textField($model,'tempat_lahir',array('size'=>25,'maxlength'=>25)); ?>
                <?php echo $form->error($model,'tempat_lahir'); ?>
            </td>
    	</tr>

    	<tr>
    		<td><?php echo $form->labelEx($model,'tanggal_lahir'); ?></td>
            <td>
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
            </td>
    	</tr>

    	<tr>
    		<td><?php echo $form->labelEx($model,'agama'); ?></td>
            <td>
        		<?php echo $form->RadioButtonList($model,'agama',array('Islam'=>'Islam','Katholik'=>'Katholik','Protestan'=>'Protestan','Buddha'=>'Buddha','Hindu'=>'Hindu')); ?>
        		<?php echo $form->error($model,'agama'); ?>
            </td>
    	</tr>

    	<tr>
    		<td><?php echo $form->labelEx($model,'alamat'); ?></td>
            <td>
        		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
        		<?php echo $form->error($model,'alamat'); ?>
            </td>
    	</tr>

    	<tr>
    		<td><?php echo $form->labelEx($model,'tahun_ajaran'); ?></td>
            <td>
        		<?php echo $form->dropDownList($model,'tahun_ajaran',$model->getTahunAjaran()); ?>
        		<?php echo $form->error($model,'tahun_ajaran'); ?>
            </td>
    	</tr>

    	<tr>
    		<td><?php echo $form->labelEx($model,'nama_wali'); ?></td>
            <td>
        		<?php echo $form->textField($model,'nama_wali',array('size'=>50,'maxlength'=>50)); ?>
        		<?php echo $form->error($model,'nama_wali'); ?>
            </td>
    	</tr>
    
    	<tr>
    		<td><?php echo $form->labelEx($model,'no_tlpn_wali'); ?></td>
            <td>
        		<?php echo $form->textField($model,'no_tlpn_wali',array('size'=>15,'maxlength'=>15)); ?>
        		<?php echo $form->error($model,'no_tlpn_wali'); ?>
            </td>
    	</tr>
    
    	<tr>
    		<td><?php echo $form->labelEx($model,'sekolah_asal'); ?></td>
            <td>
        		<?php echo $form->textField($model,'sekolah_asal',array('size'=>50,'maxlength'=>50)); ?>
        		<?php echo $form->error($model,'sekolah_asal'); ?>
            </td>
    	</tr>
    
    	<tr>
    		<td colspan="2"><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success')); ?></td>
    	</tr>
    </table>


<?php $this->endWidget(); ?>

</div><!-- form jalan -->