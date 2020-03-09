<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateEnvelopeResponse StructType
 * @subpackage Structs
 */
class CreateEnvelopeResponse extends AbstractStructBase
{
    /**
     * The CreateEnvelopeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult
     */
    public $CreateEnvelopeResult;
    /**
     * Constructor method for CreateEnvelopeResponse
     * @uses CreateEnvelopeResponse::setCreateEnvelopeResult()
     * @param \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult $createEnvelopeResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult $createEnvelopeResult = null)
    {
        $this
            ->setCreateEnvelopeResult($createEnvelopeResult);
    }
    /**
     * Get CreateEnvelopeResult value
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult|null
     */
    public function getCreateEnvelopeResult()
    {
        return $this->CreateEnvelopeResult;
    }
    /**
     * Set CreateEnvelopeResult value
     * @param \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult $createEnvelopeResult
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResponse
     */
    public function setCreateEnvelopeResult(\Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult $createEnvelopeResult = null)
    {
        $this->CreateEnvelopeResult = $createEnvelopeResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResponse
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
