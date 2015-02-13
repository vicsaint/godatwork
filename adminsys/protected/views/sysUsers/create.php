<?php
/* @var $this SysUsersController */
/* @var $model SysUsers */

$this->breadcrumbs=array(
	'Sys Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SysUsers', 'url'=>array('index')),
	array('label'=>'Manage SysUsers', 'url'=>array('admin')),
);
?>

<h1>Create SysUsers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>