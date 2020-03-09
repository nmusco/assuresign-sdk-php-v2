<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResponse StructType
 * @subpackage Structs
 */
class GetUserResponse extends AbstractStructBase
{
    /**
     * The GetUserResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetUserResult
     */
    public $GetUserResult;
    /**
     * Constructor method for GetUserResponse
     * @uses GetUserResponse::setGetUserResult()
     * @param \Nmusco\AssureSign\v2\StructType\GetUserResult $getUserResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetUserResult $getUserResult = null)
    {
        $this
            ->setGetUserResult($getUserResult);
    }
    /**
     * Get GetUserResult value
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResult|null
     */
    public function getGetUserResult()
    {
        return $this->GetUserResult;
    }
    /**
     * Set GetUserResult value
     * @param \Nmusco\AssureSign\v2\StructType\GetUserResult $getUserResult
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResponse
     */
    public function setGetUserResult(\Nmusco\AssureSign\v2\StructType\GetUserResult $getUserResult = null)
    {
        $this->GetUserResult = $getUserResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResponse
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
