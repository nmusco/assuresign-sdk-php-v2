<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadEnvelopeDocumentsResponse StructType
 * @subpackage Structs
 */
class DownloadEnvelopeDocumentsResponse extends AbstractStructBase
{
    /**
     * The DownloadEnvelopeDocumentsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult
     */
    public $DownloadEnvelopeDocumentsResult;
    /**
     * Constructor method for DownloadEnvelopeDocumentsResponse
     * @uses DownloadEnvelopeDocumentsResponse::setDownloadEnvelopeDocumentsResult()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult $downloadEnvelopeDocumentsResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult $downloadEnvelopeDocumentsResult = null)
    {
        $this
            ->setDownloadEnvelopeDocumentsResult($downloadEnvelopeDocumentsResult);
    }
    /**
     * Get DownloadEnvelopeDocumentsResult value
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult|null
     */
    public function getDownloadEnvelopeDocumentsResult()
    {
        return $this->DownloadEnvelopeDocumentsResult;
    }
    /**
     * Set DownloadEnvelopeDocumentsResult value
     * @param \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult $downloadEnvelopeDocumentsResult
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResponse
     */
    public function setDownloadEnvelopeDocumentsResult(\Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult $downloadEnvelopeDocumentsResult = null)
    {
        $this->DownloadEnvelopeDocumentsResult = $downloadEnvelopeDocumentsResult;
        return $this;
    }
}
