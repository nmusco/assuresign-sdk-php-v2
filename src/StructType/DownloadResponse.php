<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadResponse StructType
 * @subpackage Structs
 */
class DownloadResponse extends AbstractStructBase
{
    /**
     * The DownloadResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DownloadResult
     */
    public $DownloadResult;
    /**
     * Constructor method for DownloadResponse
     * @uses DownloadResponse::setDownloadResult()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadResult $downloadResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DownloadResult $downloadResult = null)
    {
        $this
            ->setDownloadResult($downloadResult);
    }
    /**
     * Get DownloadResult value
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResult|null
     */
    public function getDownloadResult()
    {
        return $this->DownloadResult;
    }
    /**
     * Set DownloadResult value
     * @param \Nmusco\AssureSign\v2\StructType\DownloadResult $downloadResult
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResponse
     */
    public function setDownloadResult(\Nmusco\AssureSign\v2\StructType\DownloadResult $downloadResult = null)
    {
        $this->DownloadResult = $downloadResult;
        return $this;
    }
}
