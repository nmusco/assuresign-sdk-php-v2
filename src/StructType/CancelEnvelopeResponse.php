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
}
