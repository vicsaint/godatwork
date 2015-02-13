<?php
/* @var $this SysBoxesController */
/* @var $model SysBoxes */

$this->breadcrumbs=array(
	'Sys Boxes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Boxes', 'url'=>array('index')),
	array('label'=>'Create Box', 'url'=>array('create')),
	array('label'=>'View Box', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Boxes', 'url'=>array('admin')),
);
?>

<h1>Update SysBoxes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>