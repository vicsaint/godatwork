<?php
// author: vicsantos
// created: april 20

class WSprocessor
{
    private $url = '';
     
    function __construct($stringURLS){
         $this->url = $stringURLS;
    }
    
     function getURLS(){
        return $this->url;       
     }    
     
      function processReading(){
        if($this->url != ''){
                $ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$this->url);
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
     
      function processPostSending($POSTDATA){
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $this->url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $POSTDATA);
                $output = curl_exec($ch);
                 // $info = curl_getinfo($ch);
                curl_close($ch);
                //return json_encode($output, true);
                return $output;
        
      }
    

    
}


?>
