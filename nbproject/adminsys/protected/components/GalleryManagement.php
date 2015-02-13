<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class GalleryManagement{
    
 function getImages($category){
  
 if(isset($category)){
                  
                $db = Yii::app()->db;
                $com = $db->createCommand("SELECT * FROM gallery WHERE category_name=:ID");
                $com->bindValue(':ID', $category);
                $result = $com->queryAll(); 
                
                
 if(count($result) > 0){
     foreach($result as $d){
 ?>   
 <li>
 <a href="<?php echo Yii::app()->request->baseUrl.$d['img_pic']; ?>" rel="prettyPhoto[gallery1]" title="<?php echo $d['title']; ?>">
 <img src="<?php echo Yii::app()->request->baseUrl.$d['img_thumb']; ?>" width="60" height="60" alt="<?php echo $d['title']; ?>" />
 </a>
 </li>    
 <?php       
     }
 }
 }
 
 }
 
}

?>