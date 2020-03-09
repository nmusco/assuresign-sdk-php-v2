<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListUsersResult StructType
 * @subpackage Structs
 */
class ListUsersResult extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Success;
    /**
     * The Users
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUser
     */
    public $Users;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException
     */
    public $Exceptions;
    /**
     * Constructor method for ListUsersResult
     * @uses ListUsersResult::setSuccess()
     * @uses ListUsersResult::setUsers()
     * @uses ListUsersResult::setExceptions()
     * @param bool $success
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUser $users
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions
     */
    public function __construct($success = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUser $users = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions = null)
    {
        $this
            ->setSuccess($success)
            ->setUsers($users)
            ->setExceptions($exceptions);
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
     * @return \Nmusco\AssureSign\v2\StructType\ListUsersResult
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
     * Get Users value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUser|null
     */
    public function getUsers()
    {
        return $this->Users;
    }
    /**
     * Set Users value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUser $users
     * @return \Nmusco\AssureSign\v2\StructType\ListUsersResult
     */
    public function setUsers(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUser $users = null)
    {
        $this->Users = $users;
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
     * @return \Nmusco\AssureSign\v2\StructType\ListUsersResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListUsersResult
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
