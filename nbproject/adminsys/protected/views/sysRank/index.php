<?php
/* @var $this SysRankController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sys Ranks',
);

$this->menu=array(
	array('label'=>'Create SysRank', 'url'=>array('create')),
	array('label'=>'Manage SysRank', 'url'=>array('admin')),
);
?>

<h1>Sys Ranks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
