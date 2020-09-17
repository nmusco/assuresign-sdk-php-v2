<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpireResponse StructType
 * @subpackage Structs
 */
class ExpireResponse extends AbstractStructBase
{
    /**
     * The DocumentExpirationResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult
     */
    public $DocumentExpirationResults;
    /**
     * Constructor method for ExpireResponse
     * @uses ExpireResponse::setDocumentExpirationResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult $documentExpirationResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult $documentExpirationResults = null)
    {
        $this
            ->setDocumentExpirationResults($documentExpirationResults);
    }
    /**
     * Get DocumentExpirationResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult|null
     */
    public function getDocumentExpirationResults()
    {
        return $this->DocumentExpirationResults;
    }
    /**
     * Set DocumentExpirationResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult $documentExpirationResults
     * @return \Nmusco\AssureSign\v2\StructType\ExpireResponse
     */
    public function setDocumentExpirationResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult $documentExpirationResults = null)
    {
        $this->DocumentExpirationResults = $documentExpirationResults;
        return $this;
    }
}
