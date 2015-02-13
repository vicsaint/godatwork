<?php
/* @var $this SysBoxesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sys Boxes',
);

$this->menu=array(
	array('label'=>'Create Box', 'url'=>array('create')),
	array('label'=>'Manage Boxes', 'url'=>array('admin')),
);
?>

<h1>Boxes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
