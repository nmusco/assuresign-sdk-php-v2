<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AsyncSubmitWithFileRetrieval StructType
 * @subpackage Structs
 */
class AsyncSubmitWithFileRetrieval extends AbstractStructBase
{
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileRetrievalDocument
     */
    public $Documents;
    /**
     * Constructor method for AsyncSubmitWithFileRetrieval
     * @uses AsyncSubmitWithFileRetrieval::setDocuments()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileRetrievalDocument $documents
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfFileRetrievalDocument $documents = null)
    {
        $this
            ->setDocuments($documents);
    }
    /**
     * Get Documents value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileRetrievalDocument|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileRetrievalDocument $documents
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileRetrieval
     */
    public function setDocuments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfFileRetrievalDocument $documents = null)
    {
        $this->Documents = $documents;
        return $this;
    }
}
