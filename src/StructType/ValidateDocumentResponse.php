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
}
