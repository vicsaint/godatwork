<?php
/* @var $this SysPluginsController */
/* @var $model SysPlugins */

$this->breadcrumbs=array(
	'Sys Plugins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SysPlugins', 'url'=>array('index')),
	array('label'=>'Create SysPlugins', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sys-plugins-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sys Plugins</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sys-plugins-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'file_path',
		'create_date',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
