<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Upload',
);

$this->menu=array(
	array('label'=>'List Image', 'url'=>array('index')),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>

<h1>Upload Image</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>