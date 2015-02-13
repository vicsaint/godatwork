
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		
<script src="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

 <style type="text/css" media="screen">
ul li { display: inline; }

</style>


 <style type="text/css" media="screen">
			
* { margin: 0; padding: 0; }
			
			
body {
				
background: #282828;
				
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

 <h2>  Gallery</h2>
			
<ul class="gallery clearfix">

 <?php echo GalleryManagement::getImages('prayermeeting'); ?>

</ul>


<!--
 <h2>  Gallery</h2>
			
<ul class="gallery clearfix">


	
<li><a href="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/fullscreen/1.jpg" rel="prettyPhoto[gallery1]" title="You can add caption to pictures. You can add caption to pictures. You can add caption to pictures.">
<img src="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/thumbnails/t_1.jpg" width="60" height="60" alt="Red round shape" /></a></li>
				
<li><a href="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/fullscreen/2.jpg" rel="prettyPhoto[gallery1]"><img src="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/thumbnails/t_2.jpg" width="60" height="60" alt="Nice building" /></a></li>

<li><a href="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/fullscreen/3.jpg" rel="prettyPhoto[gallery1]"><img src="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/thumbnails/t_3.jpg" width="60" height="60" alt="Fire!" /></a></li>
				
<li><a href="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/fullscreen/4.jpg" rel="prettyPhoto[gallery1]"><img src="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/thumbnails/t_4.jpg" width="60" height="60" alt="Rock climbing" /></a></li>
				
<li><a href="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/fullscreen/5.jpg" rel="prettyPhoto[gallery1]"><img src="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/thumbnails/t_5.jpg" width="60" height="60" alt="Fly kite, fly!" /></a></li>
				
<li><a href="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/fullscreen/6.jpg" rel="prettyPhoto[gallery1]"><img src="<?php echo Yii::app()->request->baseUrl; ?>gallery/prettyphoto/images/thumbnails/t_2.jpg" width="60" height="60" alt="Nice building" /></a></li>
			
</ul>


<br /><br />
			
-->			


<script type="text/javascript" charset="utf-8">
			
$(document).ready(function(){
				
$("area[rel^='prettyPhoto']").prettyPhoto();
				
				
$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});

$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	
$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					
custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					
changepicturecallback: function(){ initialize(); }
				});

				
$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					
custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>