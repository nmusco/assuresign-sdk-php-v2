<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AsyncSubmit StructType
 * @subpackage Structs
 */
class AsyncSubmit extends AbstractStructBase
{
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument
     */
    public $Documents;
    /**
     * Constructor method for AsyncSubmit
     * @uses AsyncSubmit::setDocuments()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument $documents
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument $documents = null)
    {
        $this
            ->setDocuments($documents);
    }
    /**
     * Get Documents value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument $documents
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmit
     */
    public function setDocuments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument $documents = null)
    {
        $this->Documents = $documents;
        return $this;
    }
}
