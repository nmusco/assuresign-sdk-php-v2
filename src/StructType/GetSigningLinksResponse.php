<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSigningLinksResponse StructType
 * @subpackage Structs
 */
class GetSigningLinksResponse extends AbstractStructBase
{
    /**
     * The GetSigningLinksResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetSigningLinksResult
     */
    public $GetSigningLinksResult;
    /**
     * Constructor method for GetSigningLinksResponse
     * @uses GetSigningLinksResponse::setGetSigningLinksResult()
     * @param \Nmusco\AssureSign\v2\StructType\GetSigningLinksResult $getSigningLinksResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetSigningLinksResult $getSigningLinksResult = null)
    {
        $this
            ->setGetSigningLinksResult($getSigningLinksResult);
    }
    /**
     * Get GetSigningLinksResult value
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksResult|null
     */
    public function getGetSigningLinksResult()
    {
        return $this->GetSigningLinksResult;
    }
    /**
     * Set GetSigningLinksResult value
     * @param \Nmusco\AssureSign\v2\StructType\GetSigningLinksResult $getSigningLinksResult
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksResponse
     */
    public function setGetSigningLinksResult(\Nmusco\AssureSign\v2\StructType\GetSigningLinksResult $getSigningLinksResult = null)
    {
        $this->GetSigningLinksResult = $getSigningLinksResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksResponse
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
