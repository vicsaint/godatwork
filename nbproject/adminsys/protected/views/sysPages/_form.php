<?php
/* @var $this SysPagesController */
/* @var $model SysPages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sys-pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
            
         
            
		<?php echo $form->labelEx($model,'content'); ?>
		
                <?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		
            <?php  
             $this->widget('application.extensions.cleditor.ECLEditor', array(
              'model'=>$model,
              'attribute'=>'content', //Model attribute name. Nome do atributo do modelo.
              'options'=>array(
              'width'=>'700',
              'height'=>600,
              'useCSS'=>true,
        ),
        'value'=>$model->content, //If you want pass a value for the widget. I think you will. Se você precisar passar um valor para o gadget. Eu acho irá.
    ));
            
            ?>
            
                <?php echo $form->error($model,'content'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->