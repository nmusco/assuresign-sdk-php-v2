<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSigningLinksResponse StructType
 * @subpackage Structs
 */
class GetSigningLinksResponse extends AbstractStructBase
{
    /**
     * The GetSigningLinksResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetSigningLinksResult
     */
    public $GetSigningLinksResult;
    /**
     * Constructor method for GetSigningLinksResponse
     * @uses GetSigningLinksResponse::setGetSigningLinksResult()
     * @param \Nmusco\AssureSign\v2\StructType\GetSigningLinksResult $getSigningLinksResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetSigningLinksResult $getSigningLinksResult = null)
    {
        $this
            ->setGetSigningLinksResult($getSigningLinksResult);
    }
    /**
     * Get GetSigningLinksResult value
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksResult|null
     */
    public function getGetSigningLinksResult()
    {
        return $this->GetSigningLinksResult;
    }
    /**
     * Set GetSigningLinksResult value
     * @param \Nmusco\AssureSign\v2\StructType\GetSigningLinksResult $getSigningLinksResult
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksResponse
     */
    public function setGetSigningLinksResult(\Nmusco\AssureSign\v2\StructType\GetSigningLinksResult $getSigningLinksResult = null)
    {
        $this->GetSigningLinksResult = $getSigningLinksResult;
        return $this;
    }
}
