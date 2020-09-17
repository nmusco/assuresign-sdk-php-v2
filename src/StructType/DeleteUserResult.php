<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUserResult StructType
 * @subpackage Structs
 */
class DeleteUserResult extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Success;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException
     */
    public $Exceptions;
    /**
     * Constructor method for DeleteUserResult
     * @uses DeleteUserResult::setSuccess()
     * @uses DeleteUserResult::setExceptions()
     * @param bool $success
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions
     */
    public function __construct($success = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions = null)
    {
        $this
            ->setSuccess($success)
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
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserResult
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
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
}
