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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResponse
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
