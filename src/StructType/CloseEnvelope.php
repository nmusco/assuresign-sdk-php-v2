<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseEnvelope StructType
 * @subpackage Structs
 */
class CloseEnvelope extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CloseEnvelopeRequest
     */
    public $Request;
    /**
     * Constructor method for CloseEnvelope
     * @uses CloseEnvelope::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelopeRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CloseEnvelopeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelopeRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelopeRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelope
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\CloseEnvelopeRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
