<?php
/* @var $this SysPluginsController */
/* @var $model SysPlugins */

$this->breadcrumbs=array(
	'Sys Plugins'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SysPlugins', 'url'=>array('index')),
	array('label'=>'Create SysPlugins', 'url'=>array('create')),
	array('label'=>'View SysPlugins', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SysPlugins', 'url'=>array('admin')),
);
?>

<h1>Update SysPlugins <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>