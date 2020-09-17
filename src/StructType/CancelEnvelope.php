<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelEnvelope StructType
 * @subpackage Structs
 */
class CancelEnvelope extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CancelEnvelopeRequest
     */
    public $Request;
    /**
     * Constructor method for CancelEnvelope
     * @uses CancelEnvelope::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\CancelEnvelopeRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CancelEnvelopeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\CancelEnvelopeRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\CancelEnvelopeRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\CancelEnvelope
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\CancelEnvelopeRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
