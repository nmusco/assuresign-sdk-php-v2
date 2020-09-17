<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PingResponse StructType
 * @subpackage Structs
 */
class PingResponse extends AbstractStructBase
{
    /**
     * The PingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\PingResult
     */
    public $PingResult;
    /**
     * Constructor method for PingResponse
     * @uses PingResponse::setPingResult()
     * @param \Nmusco\AssureSign\v2\StructType\PingResult $pingResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\PingResult $pingResult = null)
    {
        $this
            ->setPingResult($pingResult);
    }
    /**
     * Get PingResult value
     * @return \Nmusco\AssureSign\v2\StructType\PingResult|null
     */
    public function getPingResult()
    {
        return $this->PingResult;
    }
    /**
     * Set PingResult value
     * @param \Nmusco\AssureSign\v2\StructType\PingResult $pingResult
     * @return \Nmusco\AssureSign\v2\StructType\PingResponse
     */
    public function setPingResult(\Nmusco\AssureSign\v2\StructType\PingResult $pingResult = null)
    {
        $this->PingResult = $pingResult;
        return $this;
    }
}
