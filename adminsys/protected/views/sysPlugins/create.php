<?php
/* @var $this SysPluginsController */
/* @var $model SysPlugins */

$this->breadcrumbs=array(
	'Sys Plugins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SysPlugins', 'url'=>array('index')),
	array('label'=>'Manage SysPlugins', 'url'=>array('admin')),
);
?>

<h1>Create SysPlugins</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>