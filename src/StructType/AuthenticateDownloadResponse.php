<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticateDownloadResponse StructType
 * @subpackage Structs
 */
class AuthenticateDownloadResponse extends AbstractStructBase
{
    /**
     * The AuthenticateDownloadResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationResult
     */
    public $AuthenticateDownloadResult;
    /**
     * Constructor method for AuthenticateDownloadResponse
     * @uses AuthenticateDownloadResponse::setAuthenticateDownloadResult()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationResult $authenticateDownloadResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DownloadAuthenticationResult $authenticateDownloadResult = null)
    {
        $this
            ->setAuthenticateDownloadResult($authenticateDownloadResult);
    }
    /**
     * Get AuthenticateDownloadResult value
     * @return \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationResult|null
     */
    public function getAuthenticateDownloadResult()
    {
        return $this->AuthenticateDownloadResult;
    }
    /**
     * Set AuthenticateDownloadResult value
     * @param \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationResult $authenticateDownloadResult
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateDownloadResponse
     */
    public function setAuthenticateDownloadResult(\Nmusco\AssureSign\v2\StructType\DownloadAuthenticationResult $authenticateDownloadResult = null)
    {
        $this->AuthenticateDownloadResult = $authenticateDownloadResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateDownloadResponse
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
