<?php
/* @var $this SysRolemappingController */
/* @var $model SysRolemapping */

$this->breadcrumbs=array(
	'Sys Rolemappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SysRolemapping', 'url'=>array('index')),
	array('label'=>'Create SysRolemapping', 'url'=>array('create')),
	array('label'=>'Update SysRolemapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SysRolemapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SysRolemapping', 'url'=>array('admin')),
);
?>

<h1>View SysRolemapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'module_id',
		'create_date',
		'update_date',
		'created_by',
		'updated_by',
	),
)); ?>
