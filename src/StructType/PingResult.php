<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PingResult StructType
 * @subpackage Structs
 */
class PingResult extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Success;
    /**
     * Constructor method for PingResult
     * @uses PingResult::setSuccess()
     * @param bool $success
     */
    public function __construct($success = null)
    {
        $this
            ->setSuccess($success);
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
     * @return \Nmusco\AssureSign\v2\StructType\PingResult
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\PingResult
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
