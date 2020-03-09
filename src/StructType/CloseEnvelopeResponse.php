<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseEnvelopeResponse StructType
 * @subpackage Structs
 */
class CloseEnvelopeResponse extends AbstractStructBase
{
    /**
     * The CloseEnvelopeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult
     */
    public $CloseEnvelopeResult;
    /**
     * Constructor method for CloseEnvelopeResponse
     * @uses CloseEnvelopeResponse::setCloseEnvelopeResult()
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult = null)
    {
        $this
            ->setCloseEnvelopeResult($closeEnvelopeResult);
    }
    /**
     * Get CloseEnvelopeResult value
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult|null
     */
    public function getCloseEnvelopeResult()
    {
        return $this->CloseEnvelopeResult;
    }
    /**
     * Set CloseEnvelopeResult value
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResponse
     */
    public function setCloseEnvelopeResult(\Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult = null)
    {
        $this->CloseEnvelopeResult = $closeEnvelopeResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResponse
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
