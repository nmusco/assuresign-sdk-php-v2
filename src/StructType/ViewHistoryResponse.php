<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViewHistoryResponse StructType
 * @subpackage Structs
 */
class ViewHistoryResponse extends AbstractStructBase
{
    /**
     * The DocumentHistoryViewResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult
     */
    public $DocumentHistoryViewResults;
    /**
     * Constructor method for ViewHistoryResponse
     * @uses ViewHistoryResponse::setDocumentHistoryViewResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult $documentHistoryViewResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult $documentHistoryViewResults = null)
    {
        $this
            ->setDocumentHistoryViewResults($documentHistoryViewResults);
    }
    /**
     * Get DocumentHistoryViewResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult|null
     */
    public function getDocumentHistoryViewResults()
    {
        return $this->DocumentHistoryViewResults;
    }
    /**
     * Set DocumentHistoryViewResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult $documentHistoryViewResults
     * @return \Nmusco\AssureSign\v2\StructType\ViewHistoryResponse
     */
    public function setDocumentHistoryViewResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult $documentHistoryViewResults = null)
    {
        $this->DocumentHistoryViewResults = $documentHistoryViewResults;
        return $this;
    }
}
