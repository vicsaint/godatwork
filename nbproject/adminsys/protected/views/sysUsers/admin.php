<?php
/* @var $this SysUsersController */
/* @var $model SysUsers */

$this->breadcrumbs=array(
	'Sys Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SysUsers', 'url'=>array('index')),
	array('label'=>'Create SysUsers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sys-users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sys Users</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sys-users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'rank',
		'login_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
