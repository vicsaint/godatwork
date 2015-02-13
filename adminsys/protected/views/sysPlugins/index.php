<?php
/* @var $this SysPluginsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sys Plugins',
);

$this->menu=array(
	array('label'=>'Create SysPlugins', 'url'=>array('create')),
	array('label'=>'Manage SysPlugins', 'url'=>array('admin')),
);
?>

<h1>Sys Plugins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
