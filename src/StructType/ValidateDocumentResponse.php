<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDocumentResponse StructType
 * @subpackage Structs
 */
class ValidateDocumentResponse extends AbstractStructBase
{
    /**
     * The ValidateDocumentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult
     */
    public $ValidateDocumentResult;
    /**
     * Constructor method for ValidateDocumentResponse
     * @uses ValidateDocumentResponse::setValidateDocumentResult()
     * @param \Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult $validateDocumentResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult $validateDocumentResult = null)
    {
        $this
            ->setValidateDocumentResult($validateDocumentResult);
    }
    /**
     * Get ValidateDocumentResult value
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult|null
     */
    public function getValidateDocumentResult()
    {
        return $this->ValidateDocumentResult;
    }
    /**
     * Set ValidateDocumentResult value
     * @param \Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult $validateDocumentResult
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentResponse
     */
    public function setValidateDocumentResult(\Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult $validateDocumentResult = null)
    {
        $this->ValidateDocumentResult = $validateDocumentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentResponse
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
