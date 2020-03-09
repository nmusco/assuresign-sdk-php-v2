<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckEnvelopeStatus StructType
 * @subpackage Structs
 */
class CheckEnvelopeStatus extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusRequest
     */
    public $Request;
    /**
     * Constructor method for CheckEnvelopeStatus
     * @uses CheckEnvelopeStatus::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatus
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatus
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
