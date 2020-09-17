<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSignatoriesResponse StructType
 * @subpackage Structs
 */
class ListSignatoriesResponse extends AbstractStructBase
{
    /**
     * The SignatoryListQueryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult
     */
    public $SignatoryListQueryResult;
    /**
     * Constructor method for ListSignatoriesResponse
     * @uses ListSignatoriesResponse::setSignatoryListQueryResult()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult $signatoryListQueryResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult $signatoryListQueryResult = null)
    {
        $this
            ->setSignatoryListQueryResult($signatoryListQueryResult);
    }
    /**
     * Get SignatoryListQueryResult value
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult|null
     */
    public function getSignatoryListQueryResult()
    {
        return $this->SignatoryListQueryResult;
    }
    /**
     * Set SignatoryListQueryResult value
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult $signatoryListQueryResult
     * @return \Nmusco\AssureSign\v2\StructType\ListSignatoriesResponse
     */
    public function setSignatoryListQueryResult(\Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult $signatoryListQueryResult = null)
    {
        $this->SignatoryListQueryResult = $signatoryListQueryResult;
        return $this;
    }
}
