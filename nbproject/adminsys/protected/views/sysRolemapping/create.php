<?php
/* @var $this SysRolemappingController */
/* @var $model SysRolemapping */

$this->breadcrumbs=array(
	'Sys Rolemappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SysRolemapping', 'url'=>array('index')),
	array('label'=>'Manage SysRolemapping', 'url'=>array('admin')),
);
?>

<h1>Create SysRolemapping</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>