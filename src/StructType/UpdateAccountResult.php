<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAccountResult StructType
 * @subpackage Structs
 */
class UpdateAccountResult extends AbstractStructBase
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
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException
     */
    public $Exceptions;
    /**
     * Constructor method for UpdateAccountResult
     * @uses UpdateAccountResult::setSuccess()
     * @uses UpdateAccountResult::setExceptions()
     * @param bool $success
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions
     */
    public function __construct($success = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions = null)
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountResult
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
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions = null)
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountResult
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
