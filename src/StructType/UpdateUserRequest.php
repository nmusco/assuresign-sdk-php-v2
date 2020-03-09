<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUserRequest StructType
 * @subpackage Structs
 */
class UpdateUserRequest extends AbstractStructBase
{
    /**
     * The AutoGenerateNewPassword
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $AutoGenerateNewPassword;
    /**
     * The SendCredentialsViaEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $SendCredentialsViaEmail;
    /**
     * The RequirePasswordChange
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $RequirePasswordChange;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $Inactive;
    /**
     * The Locked
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $Locked;
    /**
     * The ContextIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $ContextIdentifier;
    /**
     * The Tags
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag
     */
    public $Tags;
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
     * The NewUserName
     * @var string
     */
    public $NewUserName;
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
     * The Password
     * @var string
     */
    public $Password;
    /**
     * The Role
     * @var string
     */
    public $Role;
    /**
     * Constructor method for UpdateUserRequest
     * @uses UpdateUserRequest::setAutoGenerateNewPassword()
     * @uses UpdateUserRequest::setSendCredentialsViaEmail()
     * @uses UpdateUserRequest::setRequirePasswordChange()
     * @uses UpdateUserRequest::setInactive()
     * @uses UpdateUserRequest::setLocked()
     * @uses UpdateUserRequest::setContextIdentifier()
     * @uses UpdateUserRequest::setTags()
     * @uses UpdateUserRequest::setAuthenticationToken()
     * @uses UpdateUserRequest::setUserName()
     * @uses UpdateUserRequest::setNewUserName()
     * @uses UpdateUserRequest::setFirstName()
     * @uses UpdateUserRequest::setLastName()
     * @uses UpdateUserRequest::setPassword()
     * @uses UpdateUserRequest::setRole()
     * @param bool $autoGenerateNewPassword
     * @param bool $sendCredentialsViaEmail
     * @param bool $requirePasswordChange
     * @param bool $inactive
     * @param bool $locked
     * @param string $contextIdentifier
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags
     * @param string $authenticationToken
     * @param string $userName
     * @param string $newUserName
     * @param string $firstName
     * @param string $lastName
     * @param string $password
     * @param string $role
     */
    public function __construct($autoGenerateNewPassword = null, $sendCredentialsViaEmail = null, $requirePasswordChange = null, $inactive = null, $locked = null, $contextIdentifier = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags = null, $authenticationToken = null, $userName = null, $newUserName = null, $firstName = null, $lastName = null, $password = null, $role = null)
    {
        $this
            ->setAutoGenerateNewPassword($autoGenerateNewPassword)
            ->setSendCredentialsViaEmail($sendCredentialsViaEmail)
            ->setRequirePasswordChange($requirePasswordChange)
            ->setInactive($inactive)
            ->setLocked($locked)
            ->setContextIdentifier($contextIdentifier)
            ->setTags($tags)
            ->setAuthenticationToken($authenticationToken)
            ->setUserName($userName)
            ->setNewUserName($newUserName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPassword($password)
            ->setRole($role);
    }
    /**
     * Get AutoGenerateNewPassword value
     * @return bool
     */
    public function getAutoGenerateNewPassword()
    {
        return $this->AutoGenerateNewPassword;
    }
    /**
     * Set AutoGenerateNewPassword value
     * @param bool $autoGenerateNewPassword
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setAutoGenerateNewPassword($autoGenerateNewPassword = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoGenerateNewPassword) && !is_bool($autoGenerateNewPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoGenerateNewPassword, true), gettype($autoGenerateNewPassword)), __LINE__);
        }
        $this->AutoGenerateNewPassword = $autoGenerateNewPassword;
        return $this;
    }
    /**
     * Get SendCredentialsViaEmail value
     * @return bool
     */
    public function getSendCredentialsViaEmail()
    {
        return $this->SendCredentialsViaEmail;
    }
    /**
     * Set SendCredentialsViaEmail value
     * @param bool $sendCredentialsViaEmail
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setSendCredentialsViaEmail($sendCredentialsViaEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendCredentialsViaEmail) && !is_bool($sendCredentialsViaEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendCredentialsViaEmail, true), gettype($sendCredentialsViaEmail)), __LINE__);
        }
        $this->SendCredentialsViaEmail = $sendCredentialsViaEmail;
        return $this;
    }
    /**
     * Get RequirePasswordChange value
     * @return bool
     */
    public function getRequirePasswordChange()
    {
        return $this->RequirePasswordChange;
    }
    /**
     * Set RequirePasswordChange value
     * @param bool $requirePasswordChange
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setRequirePasswordChange($requirePasswordChange = null)
    {
        // validation for constraint: boolean
        if (!is_null($requirePasswordChange) && !is_bool($requirePasswordChange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requirePasswordChange, true), gettype($requirePasswordChange)), __LINE__);
        }
        $this->RequirePasswordChange = $requirePasswordChange;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Locked value
     * @return bool
     */
    public function getLocked()
    {
        return $this->Locked;
    }
    /**
     * Set Locked value
     * @param bool $locked
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setLocked($locked = null)
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->Locked = $locked;
        return $this;
    }
    /**
     * Get ContextIdentifier value
     * @return string
     */
    public function getContextIdentifier()
    {
        return $this->ContextIdentifier;
    }
    /**
     * Set ContextIdentifier value
     * @param string $contextIdentifier
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setContextIdentifier($contextIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($contextIdentifier) && !is_string($contextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextIdentifier, true), gettype($contextIdentifier)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($contextIdentifier) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $contextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($contextIdentifier, true)), __LINE__);
        }
        $this->ContextIdentifier = $contextIdentifier;
        return $this;
    }
    /**
     * Get Tags value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag|null
     */
    public function getTags()
    {
        return $this->Tags;
    }
    /**
     * Set Tags value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setTags(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags = null)
    {
        $this->Tags = $tags;
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
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
     * Get NewUserName value
     * @return string|null
     */
    public function getNewUserName()
    {
        return $this->NewUserName;
    }
    /**
     * Set NewUserName value
     * @param string $newUserName
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setNewUserName($newUserName = null)
    {
        // validation for constraint: string
        if (!is_null($newUserName) && !is_string($newUserName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newUserName, true), gettype($newUserName)), __LINE__);
        }
        $this->NewUserName = $newUserName;
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
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
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @param string $role
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public function setRole($role = null)
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($role, true), gettype($role)), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
