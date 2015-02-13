<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class GalleryImageController extends Controller
{
    
     public function init(){
          if(!isset(Yii::app()->session['login_user'])){
           $this->redirect(Yii::app()->request->baseUrl.'/index.php/site/login');    
          }
              
      }

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

     public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        
   public function actionCreate()
   {
		$model=new Image;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                $fileName = "";

		if(isset($_POST['createImg']))
		{
	          $category = $_POST['category']; 
                  
                    if(isset($_FILES['galleryimg']) && $_FILES["galleryimg"]["name"] != ''){ 
                       $category = $_POST['category']; 
                       $caption = $_POST['captionimg']; 
                       $date=date('YmdHis');
                       //$dateT = date('Ymdhis');
                       $fileName_full = '../gallery/'.$category.'/images/fullscreen/'. $date . $_FILES["galleryimg"]["name"];
                       move_uploaded_file($_FILES["galleryimg"]["tmp_name"], $fileName_full);
                       $fileName_thumb = '../gallery/'.$category.'/images/thumbnails/'. $date . $_FILES["galleryimg"]["name"];
                      
                       //move_uploaded_file($_FILES["galleryimg"]["tmp_name"], $fileName_thumb);
                       //copy($fileName_thumb, $fileName_full);
                       
                       $this->createthumb($fileName_full,$fileName_full,850,570);
                      
                       $this->createthumb($fileName_full,$fileName_thumb,60,60);
                       
                       $fileName_thumb = substr($fileName_thumb, 3);
                       $fileName_full = substr($fileName_full, 3);
                        
                       $SQL = "INSERT INTO gallery(category_name, img_thumb, img_pic, title)";
                       $SQL = $SQL . " VALUES('".$category."', '".$fileName_thumb."', '".$fileName_full."', '".$caption."')";
                        
                       $ok = Yii::app()->db->createCommand($SQL)->execute();
                         
                       if($ok){
                         echo 'saved';   
                       } else {
                         echo 'failed saving';
                       }
                        
                        
                        //createthumb('transparent_image.png','output-transparent_image.png',200,150);
                        //createthumb('indian.gif','output-indian.gif',200,150);
                        //$this->redirect(array('view','id'=>$model->id));
                     }       
               } 
		
	$this->render('create');
  }

        
    function createthumb($source_image,$destination_image_url, $get_width, $get_height){
    ini_set('memory_limit','512M');
    set_time_limit(0);
 
    $image_array         = explode('/',$source_image);
    $image_name = $image_array[count($image_array)-1];
    $max_width     = $get_width;
    $max_height =$get_height;
    $quality = 100;
 
    //Set image ratio
    list($width, $height) = getimagesize($source_image);
    $ratio = ($width > $height) ? $max_width/$width : $max_height/$height;
    $ratiow = $width/$max_width ;
    $ratioh = $height/$max_height;
    $ratio = ($ratiow > $ratioh) ? $max_width/$width : $max_height/$height;
 
    if($width > $max_width || $height > $max_height) {
        $new_width = $width * $ratio;
        $new_height = $height * $ratio;
    } else {
        $new_width = $width;
        $new_height = $height;
    }
 
    if (preg_match("/.jpg/i","$source_image") or preg_match("/.jpeg/i","$source_image")) {
        //JPEG type thumbnail
        $image_p = imagecreatetruecolor($new_width, $new_height);
        $image = imagecreatefromjpeg($source_image);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($image_p, $destination_image_url, $quality);
        imagedestroy($image_p);
 
    } elseif (preg_match("/.png/i", "$source_image")){
        //PNG type thumbnail
        $im = imagecreatefrompng($source_image);
        $image_p = imagecreatetruecolor ($new_width, $new_height);
        imagealphablending($image_p, false);
        imagecopyresampled($image_p, $im, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagesavealpha($image_p, true);
        imagepng($image_p, $destination_image_url);
 
    } elseif (preg_match("/.gif/i", "$source_image")){
        //GIF type thumbnail
        $image_p = imagecreatetruecolor($new_width, $new_height);
        $image = imagecreatefromgif($source_image);
        $bgc = imagecolorallocate ($image_p, 255, 255, 255);
        imagefilledrectangle ($image_p, 0, 0, $new_width, $new_height, $bgc);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagegif($image_p, $destination_image_url, $quality);
        imagedestroy($image_p);
 
    } else {
        echo 'unable to load image source';
        exit;
    }
}

public function actionIndex(){
    
    $birthday = Yii::app()->db->createCommand()
    ->select('category_name, img_thumb, img_pic, title')
    ->from('gallery')
    ->where('category_name=:id', array(':id'=>'birthday'))
    ->queryAll();
    
    $prayermeeting = Yii::app()->db->createCommand()
    ->select('category_name, img_thumb, img_pic, title')
    ->from('gallery')
    ->where('category_name=:id', array(':id'=>'prayermeeting'))
    ->queryAll();
    
    $caregroup = Yii::app()->db->createCommand()
    ->select('category_name, img_thumb, img_pic, title')
    ->from('gallery')
    ->where('category_name=:id', array(':id'=>'caregroup'))
    ->queryAll();
   
    $sundayworship = Yii::app()->db->createCommand()
    ->select('category_name, img_thumb, img_pic, title')
    ->from('gallery')
    ->where('category_name=:id', array(':id'=>'sundayworship'))
    ->queryAll();
   
    
    $this->render('index',array('birthday'=>$birthday, 'prayermeeting'=>$prayermeeting, 'caregroup'=>$caregroup,
        'sundayworship'=>$sundayworship));  
  
}

    
}

?>
