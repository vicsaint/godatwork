<?php
/* @var $this SysRankController */
/* @var $model SysRank */

$this->breadcrumbs=array(
	'Sys Ranks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SysRank', 'url'=>array('index')),
	array('label'=>'Manage SysRank', 'url'=>array('admin')),
);
?>

<h1>Create SysRank</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>