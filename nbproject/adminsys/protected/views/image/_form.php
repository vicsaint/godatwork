<?php
/* @var $this ImageController */
/* @var $model Image */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'image-form',
        'enableAjaxValidation'=>false, 'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'file_name'); ?>
		<?php ///echo $form->textField($model,'file_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php //echo $form->error($model,'file_name'); ?>
	</div>

	<div class="row">
            <input type="file" name="file_path">
		<?php //echo $form->labelEx($model,'file_path'); ?>
		<?php //echo $form->fileField($model,'file_path',array('size'=>60,'maxlength'=>500)); ?>
		<?php //echo $form->error($model,'file_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
                <table width="20">
                 <tr>
                     <td width="5">Page</td><td>Box</td>
                 </tr>
                   <tr>
                     <td><?php  echo $form->radioButton($model, 'type', array('value'=>'Page')); ?></td>
                     <td><?php echo $form->radioButton($model, 'type', array('value'=>'Box')); ?>
                   </td>
                 </tr>
                 
                </table>    
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'publish'); ?>
		<?php //echo $form->textField($model,'publish'); ?>
		<?php //echo $form->error($model,'publish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->