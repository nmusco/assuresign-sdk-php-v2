<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadEnvelopeDocuments StructType
 * @subpackage Structs
 */
class DownloadEnvelopeDocuments extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest
     */
    public $Request;
    /**
     * Constructor method for DownloadEnvelopeDocuments
     * @uses DownloadEnvelopeDocuments::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocuments
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
