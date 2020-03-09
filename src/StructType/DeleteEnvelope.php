<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteEnvelope StructType
 * @subpackage Structs
 */
class DeleteEnvelope extends AbstractStructBase
{
    /**
     * The Requests
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeRequest
     */
    public $Requests;
    /**
     * Constructor method for DeleteEnvelope
     * @uses DeleteEnvelope::setRequests()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeRequest $requests
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeRequest $requests = null)
    {
        $this
            ->setRequests($requests);
    }
    /**
     * Get Requests value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeRequest|null
     */
    public function getRequests()
    {
        return $this->Requests;
    }
    /**
     * Set Requests value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeRequest $requests
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelope
     */
    public function setRequests(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeRequest $requests = null)
    {
        $this->Requests = $requests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelope
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
