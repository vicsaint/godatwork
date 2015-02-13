<?php
/* @var $this SysPagesController */
/* @var $model SysPages */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SysPages', 'url'=>array('index')),
	array('label'=>'Manage SysPages', 'url'=>array('admin')),
);
?>

<h1>Create Page</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>