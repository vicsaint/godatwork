<?php
$this->breadcrumbs=array(
	'Gifts'=>array('index'),
	$model->gift_code=>array('view','id'=>$model->gift_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gifts', 'url'=>array('index')),
	array('label'=>'Create Gifts', 'url'=>array('create')),
	array('label'=>'View Gifts', 'url'=>array('view', 'id'=>$model->gift_id)),
	array('label'=>'Manage Gifts', 'url'=>array('admin')),
);
?>

<h2>Update Gift Code: <?php echo $model->gift_code; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'dataImage'=>$dataImage, 'dataImageSmart'=>$dataImageSmart)); ?>