<?php
/* @var $this SysPagesController */
/* @var $model SysPages */

$this->breadcrumbs=array(
	'Sys Pages'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SysPages', 'url'=>array('index')),
	array('label'=>'Create SysPages', 'url'=>array('create')),
	array('label'=>'View SysPages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SysPages', 'url'=>array('admin')),
);
?>

<h1>Update SysPages <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>