<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResult StructType
 * @subpackage Structs
 */
class GetUserResult extends AbstractStructBase
{
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
     * The Locked
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Locked;
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Success;
    /**
     * The Tags
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag
     */
    public $Tags;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException
     */
    public $Exceptions;
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
     * The Role
     * @var string
     */
    public $Role;
    /**
     * Constructor method for GetUserResult
     * @uses GetUserResult::setRequirePasswordChange()
     * @uses GetUserResult::setInactive()
     * @uses GetUserResult::setLocked()
     * @uses GetUserResult::setSuccess()
     * @uses GetUserResult::setTags()
     * @uses GetUserResult::setExceptions()
     * @uses GetUserResult::setUserName()
     * @uses GetUserResult::setFirstName()
     * @uses GetUserResult::setLastName()
     * @uses GetUserResult::setRole()
     * @param bool $requirePasswordChange
     * @param bool $inactive
     * @param bool $locked
     * @param bool $success
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $role
     */
    public function __construct($requirePasswordChange = null, $inactive = null, $locked = null, $success = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions = null, $userName = null, $firstName = null, $lastName = null, $role = null)
    {
        $this
            ->setRequirePasswordChange($requirePasswordChange)
            ->setInactive($inactive)
            ->setLocked($locked)
            ->setSuccess($success)
            ->setTags($tags)
            ->setExceptions($exceptions)
            ->setUserName($userName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setRole($role);
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
     */
    public function setTags(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags = null)
    {
        $this->Tags = $tags;
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult
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
}
