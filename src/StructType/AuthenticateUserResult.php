<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticateUserResult StructType
 * @subpackage Structs
 */
class AuthenticateUserResult extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Success;
    /**
     * The Accounts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserAccount
     */
    public $Accounts;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException
     */
    public $Exceptions;
    /**
     * The AuthenticationToken
     * @var string
     */
    public $AuthenticationToken;
    /**
     * The UserName
     * @var string
     */
    public $UserName;
    /**
     * The FirstName
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * @var string
     */
    public $LastName;
    /**
     * The ExpiredPasswordUrl
     * @var string
     */
    public $ExpiredPasswordUrl;
    /**
     * The UpdateSecurityQuestionUrl
     * @var string
     */
    public $UpdateSecurityQuestionUrl;
    /**
     * The ChangePasswordUrl
     * @var string
     */
    public $ChangePasswordUrl;
    /**
     * Constructor method for AuthenticateUserResult
     * @uses AuthenticateUserResult::setSuccess()
     * @uses AuthenticateUserResult::setAccounts()
     * @uses AuthenticateUserResult::setExceptions()
     * @uses AuthenticateUserResult::setAuthenticationToken()
     * @uses AuthenticateUserResult::setUserName()
     * @uses AuthenticateUserResult::setFirstName()
     * @uses AuthenticateUserResult::setLastName()
     * @uses AuthenticateUserResult::setExpiredPasswordUrl()
     * @uses AuthenticateUserResult::setUpdateSecurityQuestionUrl()
     * @uses AuthenticateUserResult::setChangePasswordUrl()
     * @param bool $success
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserAccount $accounts
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions
     * @param string $authenticationToken
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $expiredPasswordUrl
     * @param string $updateSecurityQuestionUrl
     * @param string $changePasswordUrl
     */
    public function __construct($success = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserAccount $accounts = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions = null, $authenticationToken = null, $userName = null, $firstName = null, $lastName = null, $expiredPasswordUrl = null, $updateSecurityQuestionUrl = null, $changePasswordUrl = null)
    {
        $this
            ->setSuccess($success)
            ->setAccounts($accounts)
            ->setExceptions($exceptions)
            ->setAuthenticationToken($authenticationToken)
            ->setUserName($userName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setExpiredPasswordUrl($expiredPasswordUrl)
            ->setUpdateSecurityQuestionUrl($updateSecurityQuestionUrl)
            ->setChangePasswordUrl($changePasswordUrl);
    }
    /**
     * Get Success value
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Accounts value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserAccount|null
     */
    public function getAccounts()
    {
        return $this->Accounts;
    }
    /**
     * Set Accounts value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserAccount $accounts
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setAccounts(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUserAccount $accounts = null)
    {
        $this->Accounts = $accounts;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Get AuthenticationToken value
     * @return string|null
     */
    public function getAuthenticationToken()
    {
        return $this->AuthenticationToken;
    }
    /**
     * Set AuthenticationToken value
     * @param string $authenticationToken
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setAuthenticationToken($authenticationToken = null)
    {
        // validation for constraint: string
        if (!is_null($authenticationToken) && !is_string($authenticationToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationToken, true), gettype($authenticationToken)), __LINE__);
        }
        $this->AuthenticationToken = $authenticationToken;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get ExpiredPasswordUrl value
     * @return string|null
     */
    public function getExpiredPasswordUrl()
    {
        return $this->ExpiredPasswordUrl;
    }
    /**
     * Set ExpiredPasswordUrl value
     * @param string $expiredPasswordUrl
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setExpiredPasswordUrl($expiredPasswordUrl = null)
    {
        // validation for constraint: string
        if (!is_null($expiredPasswordUrl) && !is_string($expiredPasswordUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiredPasswordUrl, true), gettype($expiredPasswordUrl)), __LINE__);
        }
        $this->ExpiredPasswordUrl = $expiredPasswordUrl;
        return $this;
    }
    /**
     * Get UpdateSecurityQuestionUrl value
     * @return string|null
     */
    public function getUpdateSecurityQuestionUrl()
    {
        return $this->UpdateSecurityQuestionUrl;
    }
    /**
     * Set UpdateSecurityQuestionUrl value
     * @param string $updateSecurityQuestionUrl
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setUpdateSecurityQuestionUrl($updateSecurityQuestionUrl = null)
    {
        // validation for constraint: string
        if (!is_null($updateSecurityQuestionUrl) && !is_string($updateSecurityQuestionUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateSecurityQuestionUrl, true), gettype($updateSecurityQuestionUrl)), __LINE__);
        }
        $this->UpdateSecurityQuestionUrl = $updateSecurityQuestionUrl;
        return $this;
    }
    /**
     * Get ChangePasswordUrl value
     * @return string|null
     */
    public function getChangePasswordUrl()
    {
        return $this->ChangePasswordUrl;
    }
    /**
     * Set ChangePasswordUrl value
     * @param string $changePasswordUrl
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public function setChangePasswordUrl($changePasswordUrl = null)
    {
        // validation for constraint: string
        if (!is_null($changePasswordUrl) && !is_string($changePasswordUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changePasswordUrl, true), gettype($changePasswordUrl)), __LINE__);
        }
        $this->ChangePasswordUrl = $changePasswordUrl;
        return $this;
    }
}
