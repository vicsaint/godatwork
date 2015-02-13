<?php
/* @var $this SysRolemappingController */
/* @var $model SysRolemapping */

$this->breadcrumbs=array(
	'Sys Rolemappings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SysRolemapping', 'url'=>array('index')),
	array('label'=>'Create SysRolemapping', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sys-rolemapping-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sys Rolemappings</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sys-rolemapping-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'module_id',
		'create_date',
		'update_date',
		'created_by',
		/*
		'updated_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
