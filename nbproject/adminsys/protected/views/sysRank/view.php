<?php
/* @var $this SysRankController */
/* @var $model SysRank */

$this->breadcrumbs=array(
	'Sys Ranks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List SysRank', 'url'=>array('index')),
	array('label'=>'Create SysRank', 'url'=>array('create')),
	array('label'=>'Update SysRank', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SysRank', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SysRank', 'url'=>array('admin')),
);
?>

<h1>View SysRank #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'modules',
	),
)); ?>
