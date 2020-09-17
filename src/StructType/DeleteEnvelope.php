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
}
