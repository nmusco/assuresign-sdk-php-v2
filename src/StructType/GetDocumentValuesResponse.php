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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\GetDocumentValuesResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
