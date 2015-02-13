<?php

class ImageController extends Controller
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

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Image;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                $fileName = "";

		if(isset($_POST['Image']))
		{
		       $model->attributes=$_POST['Image'];
                       
                       
                       $model->file_name = $_FILES["file_path"]["name"];
                       
                       if($model->type == '0'){
                           $model->type = 'Page';
                       }
                       $model->publish = "http://godatwork.org.sg/uploadfiles/".$model->file_name ;
                       
                       if(isset($_FILES['file_path']) && $_FILES["file_path"]["name"] != ''){ 
                       //$dateT = date('Ymdhis');
                       $fileName = "../uploadfiles/". $_FILES["file_path"]["name"];
                       $model->file_path = $fileName;
                      
                       }
                      
                         
                     if($model->save()){
                       
                           
                       move_uploaded_file($_FILES["file_path"]["tmp_name"], $fileName);
                       
                       //How to call function and create image thumbnail
                       
                        if($model->type == 'Box'){
                        $this->createthumb($fileName,$fileName,300,201);
                        } else {
                        $this->createthumb($fileName,$fileName,850,570);
                        }
                        //createthumb('transparent_image.png','output-transparent_image.png',200,150);
                        //createthumb('indian.gif','output-indian.gif',200,150);
                           
                       $this->redirect(array('view','id'=>$model->id));
                       
                     } 
		}

		$this->render('create',array(
			'model'=>$model,
		));
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
        
        
        
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Image']))
		{
			$model->attributes=$_POST['Image'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		/*$dataProvider=new CActiveDataProvider('Image');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
             */

		$this->actionAdmin();	 

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Image('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Image']))
			$model->attributes=$_GET['Image'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Image the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Image::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Image $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='image-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
