<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
   private $_id;
   public function authenticate()
   {
       $user=Users::model()->findByAttributes(array('user_name'=>$this->username));  
       if($user===null)
               {
                       $this->_id='user Null';
                                   $this->errorCode=self::ERROR_USERNAME_INVALID;
               }
       else if($user->password!==$this->password)            // here I compare db password with passwod field
               {        $this->_id=$this->username;
                       $this->errorCode=self::ERROR_PASSWORD_INVALID;
               }
        
       else
       {  
          $this->_id=$user['user_id'];
          $this->setState('title', $user->user_id);
           $this->errorCode=self::ERROR_NONE;

       }
       return !$this->errorCode;
   }

   public function getId()       //  override Id
   {
       return $this->_id;
   }
}
