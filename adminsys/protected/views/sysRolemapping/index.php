<?php
/* @var $this SysRolemappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sys Rolemappings',
);

$this->menu=array(
	array('label'=>'Create SysRolemapping', 'url'=>array('create')),
	array('label'=>'Manage SysRolemapping', 'url'=>array('admin')),
);
?>

<h1>Sys Rolemappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
