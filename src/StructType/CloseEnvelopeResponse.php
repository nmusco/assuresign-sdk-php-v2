<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseEnvelopeResponse StructType
 * @subpackage Structs
 */
class CloseEnvelopeResponse extends AbstractStructBase
{
    /**
     * The CloseEnvelopeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult
     */
    public $CloseEnvelopeResult;
    /**
     * Constructor method for CloseEnvelopeResponse
     * @uses CloseEnvelopeResponse::setCloseEnvelopeResult()
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult = null)
    {
        $this
            ->setCloseEnvelopeResult($closeEnvelopeResult);
    }
    /**
     * Get CloseEnvelopeResult value
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult|null
     */
    public function getCloseEnvelopeResult()
    {
        return $this->CloseEnvelopeResult;
    }
    /**
     * Set CloseEnvelopeResult value
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResponse
     */
    public function setCloseEnvelopeResult(\Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult = null)
    {
        $this->CloseEnvelopeResult = $closeEnvelopeResult;
        return $this;
    }
}
