<?php
$this->breadcrumbs=array(
	'Configurations'=>array('index'),
	$model->name=>array('view','id'=>$model->settingid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Configurations', 'url'=>array('index')),
	array('label'=>'Create Configurations', 'url'=>array('create')),
	array('label'=>'View Configurations', 'url'=>array('view', 'id'=>$model->settingid)),
	array('label'=>'Manage Configurations', 'url'=>array('admin')),
);
?>

<h1>Update Configurations <?php echo $model->settingid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>