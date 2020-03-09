<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckEnvelopeStatusResponse StructType
 * @subpackage Structs
 */
class CheckEnvelopeStatusResponse extends AbstractStructBase
{
    /**
     * The CheckEnvelopeStatusResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult
     */
    public $CheckEnvelopeStatusResult;
    /**
     * Constructor method for CheckEnvelopeStatusResponse
     * @uses CheckEnvelopeStatusResponse::setCheckEnvelopeStatusResult()
     * @param \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult $checkEnvelopeStatusResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult $checkEnvelopeStatusResult = null)
    {
        $this
            ->setCheckEnvelopeStatusResult($checkEnvelopeStatusResult);
    }
    /**
     * Get CheckEnvelopeStatusResult value
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult|null
     */
    public function getCheckEnvelopeStatusResult()
    {
        return $this->CheckEnvelopeStatusResult;
    }
    /**
     * Set CheckEnvelopeStatusResult value
     * @param \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult $checkEnvelopeStatusResult
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResponse
     */
    public function setCheckEnvelopeStatusResult(\Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult $checkEnvelopeStatusResult = null)
    {
        $this->CheckEnvelopeStatusResult = $checkEnvelopeStatusResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResponse
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
