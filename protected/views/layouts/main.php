<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
       
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/design.css" />
         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mymenu.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="wrapper">
        
        
       <div id="header">
		<div id="logo">
                         <!--   <img src="<?php //echo Yii::app()->request->baseUrl; ?>/images/top_logo.png"> <br /> -->
		</div>
	</div>
        
        
       
                <div id="vic">
                    
                       <?php
                $db = Yii::app()->db;        
                $com = $db->createCommand("SELECT * FROM sys_pages Where url != '' order by tags ASC");
                $result = $com->queryAll();  
                $arr=array();
                 
                 $arr[]=array('label'=>'HOME', 'url'=>array('site/home'));

                 $arr[]=array('label'=>'ABOUT US', 'url'=>'#', 
		     'items'=>array(
                     array('label'=>'Statement of Faith', 'url'=>array('/pages/pagemodule/id/8')),
                     array('label'=>'Our History', 'url'=>array('/pages/pagemodule/id/7')),
                     array('label'=>'Our Leaders', 'url'=>array('/pages/pagemodule/id/11')),
                          
                     ));

                  $arr[]=array('label'=>'UPDATES', 'url'=>'#', 
		     'items'=>array(
				array('label'=>'Weekly Bulletin September 8', 'url'=>array('/pages/pagemodule/id/26')),
				array('label'=>'Weekly Bulletin September 1', 'url'=>array('/pages/pagemodule/id/23')),
				array('label'=>'Weekly Bulletin AUgust 18', 'url'=>array('/pages/pagemodule/id/3')),


                                              
                     ));     
         
                foreach($result as $data){
                if($data['id'] != 4){
               	 $arr[]=array('label'=>$data['url'], 'url'=>array('/pages/pagemodule/id/'.$data['id']));
                 } else {
		      	 $arr[]=array('label'=>$data['url'], 'url'=>array('site/contact'));
              	
			}  
                }
             		
                
        $this->widget('zii.widgets.CMenu',
                array('items'=>$arr
                     
		     )
                );
    
          ?>
            	</div>
       
        <?php //$this->widget('zii.widgets.CBreadcrumbs', array(
///	/	'links'=>$this->breadcrumbs,
//	)); ?><!-- breadcrumbs -->

        
        <div id="page">
	
                <div id="content">
                    <?php echo $content; ?>
                </div>
        
        </div>


	<div id="three-column">
		<div id="tbox1">
                <?php echo BoxManagement::getContent(5); ?>

			<!--<h2><b>Teaching Series</b></h2>
			<p><img src="images/Our_GOD.png" alt="teaching series" /></p>
			<ul class="style1">
				<li class="first">Afternoon Worship Service New Series this May 2013</li>
				<!--<li><a href="#">Link .</a></li>
				<li><a href="#">Link .</a></li>
				<li><a href="#">Link .</a></li>
			</ul>-->
		</div>
		<div id="tbox2">
                                 <?php echo BoxManagement::getContent(6); ?>

    
			<!-- <h2><b>Important Events</b></h2>
			<p><img src="images/right_mid_column.png" width="300" height="150" alt="" /></p>
			<p>One of the biggest event in this year the Water Baptism.</p>
			<ul class="style1">
				<li><a href="http://godatwork.org.sg/index.php?r=pages/pagemodule/id/12"><b>Water Baptism</b></a></li>
                            <li> &nbsp; </li>                      
 				<!-- class="first"<li><a href="#">Link .</a></li>
				<li><a href="#">Link .</a></li> 
			</ul> -->
			<!--<p><a href="http://godatwork.org.sg/index.php?r=pages/pagemodule/id/12" class="button-style">Read More</a></p>-->
		</div>
 		<div id="tbox3">
                                        <?php echo BoxManagement::getContent(7); ?>

			

			<!-- <h2><b>Social</b></h2>
			<p><a href="https://www.facebook.com/groups/113502645422667/"><img src="images/fb.png" width="300" height="120" alt="" /></a></p>
			<p> Click <a href="https://www.facebook.com/groups/113502645422667/">here</a> to join. </p>
			<p>&nbsp; </p>
                     --> 
			<!--<ul class="style1">
				<li class="first"><a href="https://www.facebook.com/groups/113502645422667/">Join our Face Book group</a></li>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Flickr</a></li>
				<li><a href="#">Google +</a></li>
			</ul>-->
		</div>
	</div>            
        
	<div id="footer">
		
                Copyright &copy; <?php echo date('Y'); ?> by God@Work.<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

        
        
</div><!-- page -->

</body>
</html>