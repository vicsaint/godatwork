<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gifts-form',
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
		<?php echo $form->labelEx($model,'gift_code'); ?>
		<?php echo $form->textField($model,'gift_code'); ?>
		<?php echo $form->error($model,'gift_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('size'=>60, 'maxlength'=>255,'rows'=>7, 'cols'=>40, 
                  'onKeyDown'=>'textAreaCounter(document.getElementById("Gifts_description"), document.getElementById("remLen1"), 255)',
                  'onKeyUp'=>'textAreaCounter(document.getElementById("Gifts_description"), document.getElementById("remLen1"), 255)',  
                    )); ?>
	         <br /><i>limited upto</i>
                <input readonly type="text" id="remLen1" name="remLen1" size="3" maxlength="3" value="255">
                
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php //echo $form->textField($model,'pub_start_date');                 
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'attribute' => 'start_date',
                    'name' => $model->start_date,
                    'options'=>array(
                    'showAnim'=>'fold',
                    'dateFormat'=>'yy-mm-dd', 
                    'altFormat'=>'yy-mm-dd',
                    'changeMonth'=>'true', 
                    'changeYear'=>'true', 
                    'yearRange'=>'1920:2020', 
                    'showOn'=>'both',
                    'buttonText'=>'..' ),
                    'htmlOptions'=>array( 'style'=>'height:18px;' ),
) );
                ?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php //echo $form->textField($model,'pub_start_date');                 
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'attribute' => 'end_date',
                    'name' => $model->end_date,
                    'options'=>array(
                    'showAnim'=>'fold',
                    'dateFormat'=>'yy-mm-dd', 
                    'altFormat'=>'yy-mm-dd',
                    'changeMonth'=>'true', 
                    'changeYear'=>'true', 
                    'yearRange'=>'1920:2020', 
                    'showOn'=>'both',
                    'buttonText'=>'..' ),
                    'htmlOptions'=>array( 'style'=>'height:18px;' ),
) );
                ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropdownList($model,'status', array('1' => 'Active', '0' => 'InActive')); ?> 
		<?php echo $form->error($model,'status'); ?>
	</div>
        <b>Web Image:</b> <br />      
        <input size="60" maxlength="255" name="ImageFile" id="Products_ImageFile" type="file" />
           <?php 
            if(empty($dataImage['filename']) == false){ 
            ?>
            <br /> Current Image: 
            <img src="<?php echo Yii::app()->request->baseUrl.'/uploads/'. $dataImage['filename']; ?>">
            <?php } ?>
        
        <br /> <br />
      
         <b>Smartphone Image:</b> <br />      
        <input size="60" maxlength="255" name="ImageFileSI" id="Products_ImageFileSI" type="file" />
           <?php 
            if(empty($dataImageSmart['filename']) == false){ 
            ?>
            <br /> Current Image: 
            <img src="<?php echo Yii::app()->request->baseUrl.'/uploads/'. $dataImageSmart['filename']; ?>">
            <?php } ?>
        
        <br /> <br />
        
        
        
        <hr>
        <br />
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->