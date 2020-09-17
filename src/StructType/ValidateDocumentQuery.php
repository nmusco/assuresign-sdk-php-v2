<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDocumentQuery StructType
 * @subpackage Structs
 */
class ValidateDocumentQuery extends AbstractStructBase
{
    /**
     * The FileDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\FileDocument
     */
    public $FileDocument;
    /**
     * Constructor method for ValidateDocumentQuery
     * @uses ValidateDocumentQuery::setFileDocument()
     * @param \Nmusco\AssureSign\v2\StructType\FileDocument $fileDocument
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\FileDocument $fileDocument = null)
    {
        $this
            ->setFileDocument($fileDocument);
    }
    /**
     * Get FileDocument value
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument|null
     */
    public function getFileDocument()
    {
        return $this->FileDocument;
    }
    /**
     * Set FileDocument value
     * @param \Nmusco\AssureSign\v2\StructType\FileDocument $fileDocument
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery
     */
    public function setFileDocument(\Nmusco\AssureSign\v2\StructType\FileDocument $fileDocument = null)
    {
        $this->FileDocument = $fileDocument;
        return $this;
    }
}
