<?php
/* @var $this SysPluginsController */
/* @var $model SysPlugins */

$this->breadcrumbs=array(
	'Sys Plugins'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SysPlugins', 'url'=>array('index')),
	array('label'=>'Create SysPlugins', 'url'=>array('create')),
	array('label'=>'Update SysPlugins', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SysPlugins', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SysPlugins', 'url'=>array('admin')),
);
?>

<h1>View SysPlugins #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'file_path',
		'create_date',
		'status',
	),
)); ?>
