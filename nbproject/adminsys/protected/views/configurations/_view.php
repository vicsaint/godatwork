<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('settingid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->settingid), array('view', 'id'=>$data->settingid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filename')); ?>:</b>
	<?php
       // $fname = explode('_', $data->filename);
        echo CHtml::link($data->filename, Yii::app()->request->baseUrl.'/uploads/'. $data->filename); ?> 
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdon')); ?>:</b>
	<?php echo CHtml::encode($data->createdon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdby')); ?>:</b>
	<?php echo CHtml::encode($data->createdby); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedon')); ?>:</b>
	<?php echo CHtml::encode($data->updatedon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedby')); ?>:</b>
	<?php echo CHtml::encode($data->updatedby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>