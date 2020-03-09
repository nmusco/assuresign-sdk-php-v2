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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
