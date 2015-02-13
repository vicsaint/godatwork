<?php

class ConfigurationsController extends Controller
{
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
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
            $login = Yii::app()->session['login_user'];
            
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array($login),
			
                           
                            
                            ),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array($login),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
                       // array('url', 'file', 'types'=>'jpg, gif, png, doc, xsl, pdf, txt'),
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
		$model=new Configurations;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Configurations']))
		{
                       $fecha = date('YmdHms'); 
                       $model->attributes=$_POST['Configurations'];
                      
                               $model->filename=CUploadedFile::getInstance($model,'filename'); 
                              if($model->filename != '' && empty($model->filename) == false){
                                $model->filename->saveAs(Yii::app()->basePath.'/../uploads/'.$fecha.'_'.$model->filename); 
                                $model->filename = $fecha.'_'.$model->filename; 
                               }
                               
                            $model->createdby =  Yii::app()->session['login_user']; // need an ID user here   //Yii::app()->user;
                            $model->createdon = $fecha;
                            $model->updatedby = 0;       // need an ID user here   //Yii::app()->user;
                            $model->updatedon =  Yii::app()->session['login_user'];
                            $model->status = 1;
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->settingid));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Configurations']))
		{
			$model->attributes=$_POST['Configurations'];
                        $fecha = date('YmdHms');  
                        
                    
                          $model->filename=CUploadedFile::getInstance($model,'filename'); 
                          if($model->filename != '' && empty($model->filename) == false){
                                $model->filename->saveAs(Yii::app()->basePath.'/../uploads/'.$fecha.'_'.$model->filename); 
                                $model->filename = $fecha.'_'.$model->filename; 
                          }else {
                             $tor =  $this->loadModel($id);
                             $model->filename = $tor->filename;
                          }
                           /*    
                         if($model->filename != '' && empty($model->filename) == false){
                                if ( (is_object($model->filename) && get_class($model->filename)==='CUploadedFile') && $model->filename != '') { 
                                $model->filename->saveAs(Yii::app()->basePath.'/../uploads/'.$fecha.'_'.$model->filename);                         
                                $model->filename = $fecha.'_'.$model->filename; 
                                } 
                          }
                          */
                        $model->updatedby = Yii::app()->session['login_user'];       // need an ID user here   //Yii::app()->user;
                        $model->updatedon = $fecha;;
                        $model->status = 1;
                         
			if($model->save())
				$this->redirect(array('view','id'=>$model->settingid));
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        
	        $dataProvider=new CActiveDataProvider('Configurations', array(
                    'criteria'=>array(
                        'condition'=>'status=1',
                        'order'=>'createdon DESC',
                    ),
                    'pagination'=>array(
                        'pageSize'=>5,
                    ),
                ));

                $this->render('index',array('dataProvider'=>$dataProvider,));
                
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Configurations('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Configurations']))
			$model->attributes=$_GET['Configurations'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Configurations::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='configurations-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
