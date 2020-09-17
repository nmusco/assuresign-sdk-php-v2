<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateEnvelope StructType
 * @subpackage Structs
 */
class CreateEnvelope extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public $Request;
    /**
     * Constructor method for CreateEnvelope
     * @uses CreateEnvelope::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelope
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
