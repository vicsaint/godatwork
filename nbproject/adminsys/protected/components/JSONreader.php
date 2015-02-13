<?php
// author: vicsantos
// created: april 20
// Yii class component that is able to handle URL that throws out JSONDATA
// The class method setURLS(url_here) will register the given url as attribute of the class
// Then the given url can be now process by class method processURLS() the method will return an array of data

class JSONreader extends CComponent
{
    private $urls = '';
     
     function setURLS($stringURLS){
         $this->urls = $stringURLS;
     }
    
     function getURLS(){
        return $this->urls;       
     }    
     
     function processURLS(){
         
         if($this->getURLS() != ''){
                $ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$this->getURLS());
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data_output = curl_exec($ch);
		curl_close($ch);
                
                $json_output = json_decode($data_output, true);  //json decoding 
                 
         } else {
                
                $json_output = 'Url was not set!'; 
         }
         
         return $json_output;
     }
    
    
}


?>
