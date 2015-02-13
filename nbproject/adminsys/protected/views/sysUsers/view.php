<?php
/* @var $this SysUsersController */
/* @var $model SysUsers */

$this->breadcrumbs=array(
	'Sys Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SysUsers', 'url'=>array('index')),
	array('label'=>'Create SysUsers', 'url'=>array('create')),
	array('label'=>'Update SysUsers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SysUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SysUsers', 'url'=>array('admin')),
);
?>

<h1>View SysUsers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'rank',
		'login_date',
	),
)); ?>
