<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PingResponse StructType
 * @subpackage Structs
 */
class PingResponse extends AbstractStructBase
{
    /**
     * The PingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\PingResult
     */
    public $PingResult;
    /**
     * Constructor method for PingResponse
     * @uses PingResponse::setPingResult()
     * @param \Nmusco\AssureSign\v2\StructType\PingResult $pingResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\PingResult $pingResult = null)
    {
        $this
            ->setPingResult($pingResult);
    }
    /**
     * Get PingResult value
     * @return \Nmusco\AssureSign\v2\StructType\PingResult|null
     */
    public function getPingResult()
    {
        return $this->PingResult;
    }
    /**
     * Set PingResult value
     * @param \Nmusco\AssureSign\v2\StructType\PingResult $pingResult
     * @return \Nmusco\AssureSign\v2\StructType\PingResponse
     */
    public function setPingResult(\Nmusco\AssureSign\v2\StructType\PingResult $pingResult = null)
    {
        $this->PingResult = $pingResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\PingResponse
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
