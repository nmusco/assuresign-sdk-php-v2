<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User StructType
 * @subpackage Structs
 */
class User extends AbstractStructBase
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
     * The Tags
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag
     */
    public $Tags;
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
     * Constructor method for User
     * @uses User::setRequirePasswordChange()
     * @uses User::setInactive()
     * @uses User::setLocked()
     * @uses User::setTags()
     * @uses User::setUserName()
     * @uses User::setFirstName()
     * @uses User::setLastName()
     * @uses User::setRole()
     * @param bool $requirePasswordChange
     * @param bool $inactive
     * @param bool $locked
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $role
     */
    public function __construct($requirePasswordChange = null, $inactive = null, $locked = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags = null, $userName = null, $firstName = null, $lastName = null, $role = null)
    {
        $this
            ->setRequirePasswordChange($requirePasswordChange)
            ->setInactive($inactive)
            ->setLocked($locked)
            ->setTags($tags)
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
     * @return \Nmusco\AssureSign\v2\StructType\User
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
     * @return \Nmusco\AssureSign\v2\StructType\User
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
     * @return \Nmusco\AssureSign\v2\StructType\User
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
     * @return \Nmusco\AssureSign\v2\StructType\User
     */
    public function setTags(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag $tags = null)
    {
        $this->Tags = $tags;
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
     * @return \Nmusco\AssureSign\v2\StructType\User
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
     * @return \Nmusco\AssureSign\v2\StructType\User
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
     * @return \Nmusco\AssureSign\v2\StructType\User
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
     * @return \Nmusco\AssureSign\v2\StructType\User
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
     * @return \Nmusco\AssureSign\v2\StructType\User
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
