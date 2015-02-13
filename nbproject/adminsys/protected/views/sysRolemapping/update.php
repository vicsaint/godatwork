<?php
/* @var $this SysRolemappingController */
/* @var $model SysRolemapping */

$this->breadcrumbs=array(
	'Sys Rolemappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SysRolemapping', 'url'=>array('index')),
	array('label'=>'Create SysRolemapping', 'url'=>array('create')),
	array('label'=>'View SysRolemapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SysRolemapping', 'url'=>array('admin')),
);
?>

<h1>Update SysRolemapping <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>