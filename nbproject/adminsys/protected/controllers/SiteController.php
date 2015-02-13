<?php

class SiteController extends Controller
{
  	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
           	// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$this->render('index');
                  $this->redirect(Yii::app()->request->baseUrl.'/index.php/site/login');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
            if(!isset(Yii::app()->session['login_user'])){
            	$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
            } else {
              
                $this->redirect(Yii::app()->request->baseUrl.'/index.php/sysPages/index');

            }
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        
        public function actionVictor(){
            $transactionID = '10003';
            $product_id = '123';
            $purchase_date = date('Ymd');
            $email = 'thurein@sph.com.sg';
            
            $data = array( 
            'transaction_id' => $transactionID,
            'product_id' => $product_id,
            'purchase_date' => $purchase_date,
            'email' => $email,
            );
           
            $urlForLogin = "http://lxc19/eshopwebservice/index.php/InAppPurchase/NewPurchase/";  
            $json  = new WSprocessor($urlForLogin);
            $data = $json->processPostSending($data);
            echo $data; 
           
        }
        
        public function actionTest(){
            
           // http://lxc19/eshopwebservice/index.php/InAppPurchase/InAppValidation/transaction_id/1000013/email/thurein@sph.com.sg
                $transaction_id = 1000013;
                $email = 'thurein@sph.com.sg';
                
                $urlForLogin = "http://lxc19/eshopwebservice/index.php/InAppPurchase/InAppValidation";      
                $urlForLogin .= "/transaction_id/".$transaction_id;
                $urlForLogin .= "/email/".$email;
       
                $json = new WSprocessor($urlForLogin);
                $data = $json->processReading();
                var_dump($data);
               
                
               // echo $data['RetCode'] ;
               // echo $data['RetMsg'] ;
                
        }
        
}