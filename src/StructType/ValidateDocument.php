<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDocument StructType
 * @subpackage Structs
 */
class ValidateDocument extends AbstractStructBase
{
    /**
     * The ValidateDocumentQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery
     */
    public $ValidateDocumentQuery;
    /**
     * Constructor method for ValidateDocument
     * @uses ValidateDocument::setValidateDocumentQuery()
     * @param \Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery $validateDocumentQuery
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery $validateDocumentQuery = null)
    {
        $this
            ->setValidateDocumentQuery($validateDocumentQuery);
    }
    /**
     * Get ValidateDocumentQuery value
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery|null
     */
    public function getValidateDocumentQuery()
    {
        return $this->ValidateDocumentQuery;
    }
    /**
     * Set ValidateDocumentQuery value
     * @param \Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery $validateDocumentQuery
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocument
     */
    public function setValidateDocumentQuery(\Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery $validateDocumentQuery = null)
    {
        $this->ValidateDocumentQuery = $validateDocumentQuery;
        return $this;
    }
}
