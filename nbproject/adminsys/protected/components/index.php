<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		
<script src="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

 <style type="text/css" media="screen">
ul li { display: inline; }

</style>


 <style type="text/css" media="screen">
			
/** { margin: 0; padding: 0; }
*/			
			
body {
				

				
font: 62.5%/1.2 Arial, Verdana, Sans-Serif;
				
padding: 0 20px;
			}
			
		
h1 { font-family: Georgia; font-style: italic; margin-bottom: 10px; }
			
			
h2 {
 font-family: Georgia;
				
font-style: italic;
				
margin: 25px 0 5px 0;
			
}
			
			
p { font-size: 1.2em; }
			
			
ul li { display: inline; }

.wide {
				
border-bottom: 1px #000 solid;
				
width: 4000px;
			
}
			
			
.fleft { float: left; margin: 0 20px 0 0; }
			
			
.cboth { clear: both; }
			
			
#main {
				background: #fff;
				
margin: 0 auto;
				
padding: 30px;
				
width: 1000px;
			}
		
</style>


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
	 <li>
 	<a href="<?php echo Yii::app()->request->baseUrl.$d['img_pic']; ?>" rel="prettyPhoto[gallery1]" title="<?php echo $d['title']; ?>">
 	<img src="http://godatwork.org.sg/<?php echo Yii::app()->request->baseUrl.$d['img_thumb']; ?>" width="60" height="60" alt="<?php echo $d['title']; ?>" />
 	</a>
 	</li>  

	<?php } ?>

<br />

<br />

	Prayer Meeting <br />
	<?php
	foreach($prayermeeting as $d){
	?>
 	<li>
 	<a href="<?php echo Yii::app()->request->baseUrl.$d['img_pic']; ?>" rel="prettyPhoto[gallery1]" title="<?php echo $d['title']; ?>">
 	<img src="http://godatwork.org.sg/<?php echo Yii::app()->request->baseUrl.$d['img_thumb']; ?>" width="60" height="60" alt="<?php echo $d['title']; ?>" />
 	</a>
 	</li> 
	<?php } ?>

<br />
<br />

	Care Group <br />
	<?php
	foreach($caregroup as $d){
	?>
 	<li>
 	<a href="<?php echo Yii::app()->request->baseUrl.$d['img_pic']; ?>" rel="prettyPhoto[gallery1]" title="<?php echo $d['title']; ?>">
 	<img src="http://godatwork.org.sg/<?php echo Yii::app()->request->baseUrl.$d['img_thumb']; ?>" width="60" height="60" alt="<?php echo $d['title']; ?>" />
 	</a>
 	</li> 
	
	<?php } ?>

<br />
<br />

	Sunday Worship <br />
	<?php
	foreach($sundayworship as $d){
	?>
 	<li>
 	<a href="<?php echo Yii::app()->request->baseUrl.$d['img_pic']; ?>" rel="prettyPhoto[gallery1]" title="<?php echo $d['title']; ?>">
 	<img src="http://godatwork.org.sg/<?php echo Yii::app()->request->baseUrl.$d['img_thumb']; ?>" width="60" height="60" alt="<?php echo $d['title']; ?>" />
 	</a>
 	</li> 

	<?php } ?>



