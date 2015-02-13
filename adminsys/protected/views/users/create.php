<?php
$this->breadcrumbs=array(
	'Gifts'=>array('index'),
	'Create Gifts Information',
);

$this->menu=array(
	array('label'=>'List Gifts', 'url'=>array('index')),
	array('label'=>'Manage Gifts', 'url'=>array('admin')),
);
?>
<h2>Add New Record</h2>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>