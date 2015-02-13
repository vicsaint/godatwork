<?php
/* @var $this SysPagesController */
/* @var $model SysPages */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pages', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sys-pages-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});

");
?>

<h1>Manage Pages</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sys-pages-grid',
       //'enablePagination' => false,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		//'content:html',
	
		'tags',
 
        
		'url',
		
		array(
                    //'header'=>'View Edit Del',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
