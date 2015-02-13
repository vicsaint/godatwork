<?php
/* @var $this SysBoxesController */
/* @var $model SysBoxes */

$this->breadcrumbs=array(
	'Box'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Boxes', 'url'=>array('index')),
	array('label'=>'Manage Boxes', 'url'=>array('admin')),
);
?>

<h1>Create Boxes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>