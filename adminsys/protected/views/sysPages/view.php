<?php
/* @var $this SysPagesController */
/* @var $model SysPages */

$this->breadcrumbs=array(
	'Sys Pages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Pages', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Update Page', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Page', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pages', 'url'=>array('admin')),
);
?>

<h1>View SysPages #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		//'content',
		array(               // related city displayed as a link
            'column'=>'Content',
            'type'=>'raw',
            'value'=>CHtml::decode($model->content)
        ),
		'create_date',
		'update_date',
		'created_by',
		'updated_by',
		'tags',
		'url',
	),
)); ?>
