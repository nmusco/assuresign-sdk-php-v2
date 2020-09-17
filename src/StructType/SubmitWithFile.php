<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitWithFile StructType
 * @subpackage Structs
 */
class SubmitWithFile extends AbstractStructBase
{
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument
     */
    public $Documents;
    /**
     * Constructor method for SubmitWithFile
     * @uses SubmitWithFile::setDocuments()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument $documents
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument $documents = null)
    {
        $this
            ->setDocuments($documents);
    }
    /**
     * Get Documents value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument $documents
     * @return \Nmusco\AssureSign\v2\StructType\SubmitWithFile
     */
    public function setDocuments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument $documents = null)
    {
        $this->Documents = $documents;
        return $this;
    }
}
