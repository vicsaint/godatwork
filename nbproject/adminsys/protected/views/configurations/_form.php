<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'configurations-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'), 

)); ?>
    
<SCRIPT LANGUAGE="JavaScript">
function textAreaCounter(descrip,cntfield,maxlimit) {
if (descrip.value.length > maxlimit) // if too long...trim it!
descrip.value = descrip.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - descrip.value.length;
}
</script>



	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>80,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('size'=>60,'maxlength'=>255,'rows'=>7, 'cols'=>40, 
                  'onKeyDown'=>'textAreaCounter(document.getElementById("Configurations_description"), document.getElementById("remLen1"), 255)',
                  'onKeyUp'=>'textAreaCounter(document.getElementById("Configurations_description"), document.getElementById("remLen1"), 255)',  
                    )); ?>
	         <br /><i>limited upto</i>
                <input readonly type="text" id="remLen1" name="remLen1" size="3" maxlength="3" value="255">
	  
    
                 <?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
                <?php echo $form->fileField($model,'filename',array('size'=>60,'maxlength'=>255)); ?> 
                <?php if(empty($model->filename) == false){ echo '<br /><br /> Current file: ' . CHtml::link($model->filename, Yii::app()->request->baseUrl.'/uploads/'. $model->filename).' <br /><br />'; } ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

        <!--
	<div class="row">
		<?php echo $form->labelEx($model,'createdon'); ?>
		<?php echo $form->textField($model,'createdon'); ?>
		<?php echo $form->error($model,'createdon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdby'); ?>
		<?php echo $form->textField($model,'createdby'); ?>
		<?php echo $form->error($model,'createdby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedon'); ?>
		<?php echo $form->textField($model,'updatedon'); ?>
		<?php echo $form->error($model,'updatedon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedby'); ?>
		<?php echo $form->textField($model,'updatedby'); ?>
		<?php echo $form->error($model,'updatedby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
        -->
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->