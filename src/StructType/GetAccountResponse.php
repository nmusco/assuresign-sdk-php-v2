<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountResponse StructType
 * @subpackage Structs
 */
class GetAccountResponse extends AbstractStructBase
{
    /**
     * The GetAccountResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetAccountResult
     */
    public $GetAccountResult;
    /**
     * Constructor method for GetAccountResponse
     * @uses GetAccountResponse::setGetAccountResult()
     * @param \Nmusco\AssureSign\v2\StructType\GetAccountResult $getAccountResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetAccountResult $getAccountResult = null)
    {
        $this
            ->setGetAccountResult($getAccountResult);
    }
    /**
     * Get GetAccountResult value
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult|null
     */
    public function getGetAccountResult()
    {
        return $this->GetAccountResult;
    }
    /**
     * Set GetAccountResult value
     * @param \Nmusco\AssureSign\v2\StructType\GetAccountResult $getAccountResult
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResponse
     */
    public function setGetAccountResult(\Nmusco\AssureSign\v2\StructType\GetAccountResult $getAccountResult = null)
    {
        $this->GetAccountResult = $getAccountResult;
        return $this;
    }
}
