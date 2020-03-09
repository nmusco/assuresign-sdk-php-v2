<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLinkResponse StructType
 * @subpackage Structs
 */
class GetAccessLinkResponse extends AbstractStructBase
{
    /**
     * The GetAccessLinkResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult
     */
    public $GetAccessLinkResult;
    /**
     * Constructor method for GetAccessLinkResponse
     * @uses GetAccessLinkResponse::setGetAccessLinkResult()
     * @param \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult $getAccessLinkResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetAccessLinkResult $getAccessLinkResult = null)
    {
        $this
            ->setGetAccessLinkResult($getAccessLinkResult);
    }
    /**
     * Get GetAccessLinkResult value
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult|null
     */
    public function getGetAccessLinkResult()
    {
        return $this->GetAccessLinkResult;
    }
    /**
     * Set GetAccessLinkResult value
     * @param \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult $getAccessLinkResult
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResponse
     */
    public function setGetAccessLinkResult(\Nmusco\AssureSign\v2\StructType\GetAccessLinkResult $getAccessLinkResult = null)
    {
        $this->GetAccessLinkResult = $getAccessLinkResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResponse
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
