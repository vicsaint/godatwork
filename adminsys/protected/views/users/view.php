<?php

$this->breadcrumbs=array(
	'Gifts'=>array('index'),
	$model->gift_code,
);

$this->menu=array(
	array('label'=>'List Gifts', 'url'=>array('index')),
	array('label'=>'Create Gifts', 'url'=>array('create')),
	array('label'=>'Update Gifts', 'url'=>array('update', 'id'=>$model->gift_id)),
	array('label'=>'Delete Gifts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->gift_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gifts', 'url'=>array('admin')),
);

?>

<h2>View Gift Code: <?php echo $model->gift_code; ?></h2>

<?php if(empty($dataImage['filename']) == false){ ?>
<b>Web Image:</b> <br />
<img src="<?php echo Yii::app()->request->baseUrl.'/uploads/'. $dataImage['filename']; ?>">
<?php } else { ?>
<b>No Image</b> ..
<br /><br />
<?php } ?>
<br />

<?php if(empty($dataImageSmart['filename']) == false){ ?>
<b>Smartphone Image:</b> <br />
<img src="<?php echo Yii::app()->request->baseUrl.'/uploads/'. $dataImageSmart['filename']; ?>">
<?php } else { ?>
<b>No Image</b> ..
<br /><br />
<?php } ?>
<br />


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gift_code',
		'description',
		'start_date',
		'end_date',
		'createdon',
		'createdby',
		//'status',
	),
)); ?>




