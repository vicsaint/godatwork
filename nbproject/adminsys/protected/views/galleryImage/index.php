<?php
$this->breadcrumbs=array(
	'Gallery Images',
);

$this->menu=array(
	array('label'=>'Upload Image', 'url'=>array('create')),
	array('label'=>'Manage Image', 'url'=>array('index')),
);



?>

Birthdays <br />
<?php
foreach($birthday as $d){
?>
<?php 

?>
<?php } ?>

<br />

<br />

Prayer Meeting <br />
<?php
foreach($prayermeeting as $d){
?>
<?php 

?>
<?php } ?>

<br />
<br />

Care Group <br />
<?php
foreach($caregroup as $d){
?>
<?php 

?>
<?php } ?>

<br />
<br />

Sunday Worship <br />
<?php
foreach($sundayworship as $d){
?>
<?php 

?>
<?php } ?>

