<?php $this->beginContent('/layouts/main'); ?>
<div class="container">
	<div class="span-18">
		<div id="content">
			<?php echo $content; ?>
                    
                 
                     
		</div><!-- content -->
	</div>
	
             <!--  <div class="span-6 last">
		<div id="sidebar">
              -->      
                    <div id="sidebar">
			<div id="tbox1">
				<h2></h2>
				<ul class="style2">
					<li class="first">
                                          <?php echo BoxManagement::getContent(1); ?>
                                          <!--  
                                          <div style="margin-top: 15px; margin-left: 10px;">  
						<b>WORSHIP SERVICE</b>
                                                <br />
                                                <div style="margin-left: 30px;">
                                                <br />    
						<p><b>Morning</b><br /><a href="#">10:00AM - 11:30AM</a></p>
						<p><b>Afternoon</b><br /><a href="#">2:00pM - 4:00PM</a></p>
						</div>
                                          </div>
                                           -->  
					</li>
                                        
					<li class="first">
                                            <?php echo BoxManagement::getContent(2); ?>
                                            <!--
                                             <div style="margin-top: 15px; margin-left: 10px;">  
						<b>CHURCH MINISTRIES</b>
                                                <br />
                                                <div style="margin-left: 30px;">
                                                <br />    
						<a href="#">Praise and Worship </a><br />
						<a href="#">Cell Group</a><br />
						<a href="#">Care Group</a><br />	
						<a href="#">Music</a><br />	
						<a href="#">Prayer</a><br />	
						


						</p><br />
						</div>
                                              </div>
						 -->
					</li>
					<li class="first">
						  <?php echo BoxManagement::getContent(3); ?>
                                            <!--
                                               <div style="margin-top: 15px; margin-left: 10px;">  
						<b>PHOTO GALLERY</b>
                                                <br />
                                                <div style="margin-left: 30px;">
                                                 <br />
						<p><a href="#">Birthdays</a><br />
						<a href="#">Prayer Meeting</a><br />
                                                <a href="#">Care Group</a><br />
                                                <a href="#">Sunday Worship</a></p><br />
                                                </div>
                                                </div>
                                             --> 						
					</li>
                                      <!--   
                                        <li class="first">
                                              <?php //echo BoxManagement::getContent(4); ?>
                                             
                                               <div style="margin-top: 15px; margin-left: 10px;">  
						<b>VIDEO GALLERY</b>
                                                <br />
                                                <div style="margin-left: 30px;">
                                                 <br />
						<p><a href="#">Birthdays</a><br />
						<a href="#">Prayer Meeting</a><br />
                                                <a href="#">Care Group</a><br />
                                                <a href="#">Sunday Worship</a></p><br />
                                                </div>
                                                </div>
                                            	-->					
					</li>
					
						
				</ul>
				
			</div>
		</div>
                    
			<?php //if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

			<?php //$this->widget('TagCloud', array(
			//	'maxTags'=>Yii::app()->params['tagCloudCount'],
			//)); ?>

			<?php //$this->widget('RecentComments', array(
			//	'maxComments'=>Yii::app()->params['recentCommentCount'],
		//	)); ?>
              
	<!--	</div>
	</div>  -->






</div>
<?php $this->endContent(); ?>