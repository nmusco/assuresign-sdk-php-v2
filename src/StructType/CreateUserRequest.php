<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUserRequest StructType
 * @subpackage Structs
 */
class CreateUserRequest extends AbstractStructBase
{
    /**
     * The AutoGeneratePassword
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $AutoGeneratePassword;
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
     * The ContextIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $ContextIdentifier;
    /**
     * The RequirePasswordChange
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RequirePasswordChange;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Inactive;
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
     * Constructor method for CreateUserRequest
     * @uses CreateUserRequest::setAutoGeneratePassword()
     * @uses CreateUserRequest::setSendCredentialsViaEmail()
     * @uses CreateUserRequest::setContextIdentifier()
     * @uses CreateUserRequest::setRequirePasswordChange()
     * @uses CreateUserRequest::setInactive()
     * @uses CreateUserRequest::setTags()
     * @uses CreateUserRequest::setAuthenticationToken()
     * @uses CreateUserRequest::setUserName()
     * @uses CreateUserRequest::setFirstName()
     * @uses CreateUserRequest::setLastName()
     * @uses CreateUserRequest::setPassword()
     * @uses CreateUserRequest::setRole()
     * @param bool $autoGeneratePassword
     * @param bool $sendCredentialsViaEmail
     * @param string $contextIdentifier
     * @param bool $requirePasswordChange
     * @param bool $inactive
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags
     * @param string $authenticationToken
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $password
     * @param string $role
     */
    public function __construct($autoGeneratePassword = null, $sendCredentialsViaEmail = null, $contextIdentifier = null, $requirePasswordChange = null, $inactive = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags = null, $authenticationToken = null, $userName = null, $firstName = null, $lastName = null, $password = null, $role = null)
    {
        $this
            ->setAutoGeneratePassword($autoGeneratePassword)
            ->setSendCredentialsViaEmail($sendCredentialsViaEmail)
            ->setContextIdentifier($contextIdentifier)
            ->setRequirePasswordChange($requirePasswordChange)
            ->setInactive($inactive)
            ->setTags($tags)
            ->setAuthenticationToken($authenticationToken)
            ->setUserName($userName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPassword($password)
            ->setRole($role);
    }
    /**
     * Get AutoGeneratePassword value
     * @return bool
     */
    public function getAutoGeneratePassword()
    {
        return $this->AutoGeneratePassword;
    }
    /**
     * Set AutoGeneratePassword value
     * @param bool $autoGeneratePassword
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
     */
    public function setAutoGeneratePassword($autoGeneratePassword = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoGeneratePassword) && !is_bool($autoGeneratePassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoGeneratePassword, true), gettype($autoGeneratePassword)), __LINE__);
        }
        $this->AutoGeneratePassword = $autoGeneratePassword;
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest
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
