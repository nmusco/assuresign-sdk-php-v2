<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadTemplateResponse StructType
 * @subpackage Structs
 */
class DownloadTemplateResponse extends AbstractStructBase
{
    /**
     * The DownloadTemplateResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DownloadTemplateResult
     */
    public $DownloadTemplateResult;
    /**
     * Constructor method for DownloadTemplateResponse
     * @uses DownloadTemplateResponse::setDownloadTemplateResult()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadTemplateResult $downloadTemplateResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DownloadTemplateResult $downloadTemplateResult = null)
    {
        $this
            ->setDownloadTemplateResult($downloadTemplateResult);
    }
    /**
     * Get DownloadTemplateResult value
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateResult|null
     */
    public function getDownloadTemplateResult()
    {
        return $this->DownloadTemplateResult;
    }
    /**
     * Set DownloadTemplateResult value
     * @param \Nmusco\AssureSign\v2\StructType\DownloadTemplateResult $downloadTemplateResult
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateResponse
     */
    public function setDownloadTemplateResult(\Nmusco\AssureSign\v2\StructType\DownloadTemplateResult $downloadTemplateResult = null)
    {
        $this->DownloadTemplateResult = $downloadTemplateResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateResponse
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
