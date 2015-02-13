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

    
	<div class="row">
        Select:    <select name='category'>
                <option value='birthday'>Birthday</option>
                <option value='prayermeeting'>Prayer Meeting</option>
                <option value='caregroup'>Care Group</option>
                <option value='sundayworship'>Sunday Worship</option>
            </select>   
	</div>
          
        <div class="row">
          Caption:  <input type="text" name="captionimg">
	</div>
       
	<div class="row">
            <input type="file" name="galleryimg">
	</div>

    
	<div class="row buttons">
	 <input type="submit" name="createImg" value="Send">
	</div>

    
<?php $this->endWidget(); ?>
</div><!-- form -->

