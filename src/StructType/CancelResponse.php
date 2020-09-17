<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelResponse StructType
 * @subpackage Structs
 */
class CancelResponse extends AbstractStructBase
{
    /**
     * The DocumentCancellationResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult
     */
    public $DocumentCancellationResults;
    /**
     * Constructor method for CancelResponse
     * @uses CancelResponse::setDocumentCancellationResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult $documentCancellationResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult $documentCancellationResults = null)
    {
        $this
            ->setDocumentCancellationResults($documentCancellationResults);
    }
    /**
     * Get DocumentCancellationResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult|null
     */
    public function getDocumentCancellationResults()
    {
        return $this->DocumentCancellationResults;
    }
    /**
     * Set DocumentCancellationResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult $documentCancellationResults
     * @return \Nmusco\AssureSign\v2\StructType\CancelResponse
     */
    public function setDocumentCancellationResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult $documentCancellationResults = null)
    {
        $this->DocumentCancellationResults = $documentCancellationResults;
        return $this;
    }
}
