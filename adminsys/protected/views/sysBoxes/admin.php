<?php
/* @var $this SysBoxesController */
/* @var $model SysBoxes */

$this->breadcrumbs=array(
	'Boxes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Boxes', 'url'=>array('index')),
	array('label'=>'Create Boxe', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sys-boxes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sys Boxes</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sys-boxes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'content:html',

	     	/*	array(               
                     'name'=>'content',
                     'value'=>CHtml::decode($model->content)
              	),
		*/

		//'create_date',
		//'update_date',
		//'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
