<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
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
		$record=Usuario::model()->findByAttributes(array('nombre_usuario'=>$this->username));
		if($record===null){
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}else if($record->password !== crypt($this->password, $record->password)){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}else{
			$this->_id = $record->id_usuario;
			$this->setState('empleado', $record->id_empleado);
            $this->setState('nombre', $record->nombre_usuario);
            $this->setState('rol', $record->id_rol);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
		
		/*if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/
	}

    public function getId(){
    return $this->_id;
}
	
	
}