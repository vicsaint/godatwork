<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Upload Image', 'url'=>array('create')),
	array('label'=>'Delete Image', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>

<h1>View Image #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'file_name',
		'file_path',
		'type',
		'publish',
	),
)); 
?>


<img src="<?php echo $model->publish; ?>" alt="image" /> 

