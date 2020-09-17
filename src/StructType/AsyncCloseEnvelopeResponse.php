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
}
