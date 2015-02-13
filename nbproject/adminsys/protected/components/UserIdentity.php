<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
	     /*	$options = Yii::app()->params['ldap'];
		$dc_string = implode(".",$options['dc']);
 
		$connection = ldap_connect($options['host']);
		ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
		ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
 
		if($connection)
		{
		$bind = @ldap_bind($connection, "{$this->username}@{$dc_string}", $this->password);
	             
                     if($bind){
                       Yii::app()->session['login_user'] = $this->username;
                       }
                //Yii::app()->session->get('login_user');
                
	    	if(!$bind) $this->errorCode = self::ERROR_PASSWORD_INVALID;
				else $this->errorCode = self::ERROR_NONE;
		}

		return !$this->errorCode;
               */
               
                $users=array(
			// username => password
			//'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
                    Yii::app()->session['login_user'] = $users['admin'];
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
                
                
                /*
                 * {Write}

view sourceprint?1 Yii::app()->session['url']='http://yiiblog.info';  

2 Yii::app()->session->add('author','BoyLee'); 
{Read}

view sourceprint?
1 echo Yii::app()->session['url']; //http://yiiblog.info  

2 echo Yii::app()->session->get('author'); // BoyLee 
{Destory}


view sourceprint?
1 Yii::app()->session->get('author')-> destroy();  

                 * 
                 */
                
            
	}
}