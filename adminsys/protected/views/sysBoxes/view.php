<?php
/* @var $this SysBoxesController */
/* @var $model SysBoxes */

$this->breadcrumbs=array(
	'Boxes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Boxes', 'url'=>array('index')),
	array('label'=>'Create Box', 'url'=>array('create')),
	array('label'=>'Update Box', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Box', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Boxes', 'url'=>array('admin')),
);
?>

<h1>View Box #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	//	'content',

 
	array(               // related city displayed as a link
            'column'=>'Content',
            'type'=>'raw',
            'value'=>CHtml::decode($model->content)
        ),
		'create_date',
		'update_date',
		'status',
	),
)); ?>
