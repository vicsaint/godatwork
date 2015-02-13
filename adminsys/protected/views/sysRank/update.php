<?php
/* @var $this SysRankController */
/* @var $model SysRank */

$this->breadcrumbs=array(
	'Sys Ranks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SysRank', 'url'=>array('index')),
	array('label'=>'Create SysRank', 'url'=>array('create')),
	array('label'=>'View SysRank', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SysRank', 'url'=>array('admin')),
);
?>

<h1>Update SysRank <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>