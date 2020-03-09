<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelEnvelopeResponse StructType
 * @subpackage Structs
 */
class CancelEnvelopeResponse extends AbstractStructBase
{
    /**
     * The CancelEnvelopeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CancelEnvelopeResult
     */
    public $CancelEnvelopeResult;
    /**
     * Constructor method for CancelEnvelopeResponse
     * @uses CancelEnvelopeResponse::setCancelEnvelopeResult()
     * @param \Nmusco\AssureSign\v2\StructType\CancelEnvelopeResult $cancelEnvelopeResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CancelEnvelopeResult $cancelEnvelopeResult = null)
    {
        $this
            ->setCancelEnvelopeResult($cancelEnvelopeResult);
    }
    /**
     * Get CancelEnvelopeResult value
     * @return \Nmusco\AssureSign\v2\StructType\CancelEnvelopeResult|null
     */
    public function getCancelEnvelopeResult()
    {
        return $this->CancelEnvelopeResult;
    }
    /**
     * Set CancelEnvelopeResult value
     * @param \Nmusco\AssureSign\v2\StructType\CancelEnvelopeResult $cancelEnvelopeResult
     * @return \Nmusco\AssureSign\v2\StructType\CancelEnvelopeResponse
     */
    public function setCancelEnvelopeResult(\Nmusco\AssureSign\v2\StructType\CancelEnvelopeResult $cancelEnvelopeResult = null)
    {
        $this->CancelEnvelopeResult = $cancelEnvelopeResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CancelEnvelopeResponse
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
