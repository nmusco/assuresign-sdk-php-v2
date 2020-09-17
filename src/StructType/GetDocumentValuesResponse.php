<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentValuesResponse StructType
 * @subpackage Structs
 */
class GetDocumentValuesResponse extends AbstractStructBase
{
    /**
     * The GetDocumentValuesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult
     */
    public $GetDocumentValuesResult;
    /**
     * Constructor method for GetDocumentValuesResponse
     * @uses GetDocumentValuesResponse::setGetDocumentValuesResult()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult $getDocumentValuesResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult $getDocumentValuesResult = null)
    {
        $this
            ->setGetDocumentValuesResult($getDocumentValuesResult);
    }
    /**
     * Get GetDocumentValuesResult value
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult|null
     */
    public function getGetDocumentValuesResult()
    {
        return $this->GetDocumentValuesResult;
    }
    /**
     * Set GetDocumentValuesResult value
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult $getDocumentValuesResult
     * @return \Nmusco\AssureSign\v2\StructType\GetDocumentValuesResponse
     */
    public function setGetDocumentValuesResult(\Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult $getDocumentValuesResult = null)
    {
        $this->GetDocumentValuesResult = $getDocumentValuesResult;
        return $this;
    }
}
