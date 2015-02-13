<?php
$this->breadcrumbs=array(
	'Configurations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Configurations', 'url'=>array('index')),
	array('label'=>'Create Configurations', 'url'=>array('create')),
	array('label'=>'Update Configurations', 'url'=>array('update', 'id'=>$model->settingid)),
	array('label'=>'Delete Configurations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->settingid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Configurations', 'url'=>array('admin')),
);
?>

<h1>View Configurations #<?php echo $model->settingid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'settingid',
		'name',
		'value',
		'description',
		'filename',
		'createdon',
		'createdby',
		'updatedon',
		'updatedby',
		//'status',
	),
)); 




?>
