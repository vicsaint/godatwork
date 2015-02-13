<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Image', 'url'=>array('index')),
	array('label'=>'Upload Image', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#image-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Images</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'image-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'file_name',
		'file_path',
		'type',
		'publish:url',


              
             array(
            'name'=>'image',
            'type'=>'html',
            'value'=>'(!empty($data->file_path))?CHtml::image(Yii::app()->assetManager->publish($data->file_path),"",array("style"=>"width:50px;height:40px;")):"no image"',
 
        ),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
