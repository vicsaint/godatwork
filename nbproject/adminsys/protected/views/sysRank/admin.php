<?php
/* @var $this SysRankController */
/* @var $model SysRank */

$this->breadcrumbs=array(
	'Sys Ranks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SysRank', 'url'=>array('index')),
	array('label'=>'Create SysRank', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sys-rank-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sys Ranks</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sys-rank-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'description',
		'modules',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
