<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class BoxManagement{
    
   
    function getContent($id) {
    
        if(isset($id)){
                  
                $db = Yii::app()->db;
                $com = $db->createCommand("SELECT content FROM sys_boxes WHERE id=:ID");
                $com->bindValue(':ID', $id);
                $result = $com->queryRow();  
                
                    if($result['content'] != ''){
                       return $result['content'];
                    } else {
                    throw new CHttpException(404,'The requested page does not exist.');    
                    } 
                    
                    
                }
        
    }
    
}

?>
