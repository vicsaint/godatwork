<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class PagesController extends Controller
{
   	public $layout='//layouts/column2';

        public function actionPageModule()
        {
                if(isset($_GET['id'])){
                  
                $db = Yii::app()->db;
                $com = $db->createCommand("SELECT content FROM sys_pages WHERE id=:ID");
                $com->bindValue(':ID', $_GET['id']);
                $result = $com->queryRow();  
                
                    if($result['content'] != ''){
                        $this->render('index',array(
                                'pagescontent'=>$result['content'],
                         ));
                    } 
                    
                    
                }
            
        }

}

?>
