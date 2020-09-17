<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckEnvelopeStatusResponse StructType
 * @subpackage Structs
 */
class CheckEnvelopeStatusResponse extends AbstractStructBase
{
    /**
     * The CheckEnvelopeStatusResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult
     */
    public $CheckEnvelopeStatusResult;
    /**
     * Constructor method for CheckEnvelopeStatusResponse
     * @uses CheckEnvelopeStatusResponse::setCheckEnvelopeStatusResult()
     * @param \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult $checkEnvelopeStatusResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult $checkEnvelopeStatusResult = null)
    {
        $this
            ->setCheckEnvelopeStatusResult($checkEnvelopeStatusResult);
    }
    /**
     * Get CheckEnvelopeStatusResult value
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult|null
     */
    public function getCheckEnvelopeStatusResult()
    {
        return $this->CheckEnvelopeStatusResult;
    }
    /**
     * Set CheckEnvelopeStatusResult value
     * @param \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult $checkEnvelopeStatusResult
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResponse
     */
    public function setCheckEnvelopeStatusResult(\Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult $checkEnvelopeStatusResult = null)
    {
        $this->CheckEnvelopeStatusResult = $checkEnvelopeStatusResult;
        return $this;
    }
}
