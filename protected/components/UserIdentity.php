<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /** @var  User */
    protected $_user;

    const LOGIN = 'admin';
    const PASS = 'qwe123';

	public function authenticate() {

		if($this->username != self::LOGIN || $this->password != self::PASS) {
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
            return false;
        }
        $this->errorCode=self::ERROR_NONE;
		return true;
	}

    /**
     * Returns the unique identifier for the identity.
     * The default implementation simply returns {@link username}.
     * This method is required by {@link IUserIdentity}.
     * @return string the unique identifier for the identity.
     */
    public function getId()
    {
        return self::LOGIN;
    }

    /**
     * Returns the display name for the identity.
     * The default implementation simply returns {@link username}.
     * This method is required by {@link IUserIdentity}.
     * @return string the display name for the identity.
     */
    public function getName()
    {
        return self::LOGIN;
    }
}