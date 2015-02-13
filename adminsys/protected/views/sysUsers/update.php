<?php
/* @var $this SysUsersController */
/* @var $model SysUsers */

$this->breadcrumbs=array(
	'Sys Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SysUsers', 'url'=>array('index')),
	array('label'=>'Create SysUsers', 'url'=>array('create')),
	array('label'=>'View SysUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SysUsers', 'url'=>array('admin')),
);
?>

<h1>Update SysUsers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>