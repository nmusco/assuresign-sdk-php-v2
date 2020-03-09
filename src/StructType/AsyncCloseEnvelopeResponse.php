<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AsyncCloseEnvelopeResponse StructType
 * @subpackage Structs
 */
class AsyncCloseEnvelopeResponse extends AbstractStructBase
{
    /**
     * The AsyncCloseEnvelopeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResult
     */
    public $AsyncCloseEnvelopeResult;
    /**
     * Constructor method for AsyncCloseEnvelopeResponse
     * @uses AsyncCloseEnvelopeResponse::setAsyncCloseEnvelopeResult()
     * @param \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResult $asyncCloseEnvelopeResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResult $asyncCloseEnvelopeResult = null)
    {
        $this
            ->setAsyncCloseEnvelopeResult($asyncCloseEnvelopeResult);
    }
    /**
     * Get AsyncCloseEnvelopeResult value
     * @return \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResult|null
     */
    public function getAsyncCloseEnvelopeResult()
    {
        return $this->AsyncCloseEnvelopeResult;
    }
    /**
     * Set AsyncCloseEnvelopeResult value
     * @param \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResult $asyncCloseEnvelopeResult
     * @return \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResponse
     */
    public function setAsyncCloseEnvelopeResult(\Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResult $asyncCloseEnvelopeResult = null)
    {
        $this->AsyncCloseEnvelopeResult = $asyncCloseEnvelopeResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResponse
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
