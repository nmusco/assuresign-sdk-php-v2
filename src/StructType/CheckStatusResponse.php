<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckStatusResponse StructType
 * @subpackage Structs
 */
class CheckStatusResponse extends AbstractStructBase
{
    /**
     * The DocumentStatusCheckResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult
     */
    public $DocumentStatusCheckResults;
    /**
     * Constructor method for CheckStatusResponse
     * @uses CheckStatusResponse::setDocumentStatusCheckResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult $documentStatusCheckResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult $documentStatusCheckResults = null)
    {
        $this
            ->setDocumentStatusCheckResults($documentStatusCheckResults);
    }
    /**
     * Get DocumentStatusCheckResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult|null
     */
    public function getDocumentStatusCheckResults()
    {
        return $this->DocumentStatusCheckResults;
    }
    /**
     * Set DocumentStatusCheckResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult $documentStatusCheckResults
     * @return \Nmusco\AssureSign\v2\StructType\CheckStatusResponse
     */
    public function setDocumentStatusCheckResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult $documentStatusCheckResults = null)
    {
        $this->DocumentStatusCheckResults = $documentStatusCheckResults;
        return $this;
    }
}
