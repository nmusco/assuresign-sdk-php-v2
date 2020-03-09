<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUserResponse StructType
 * @subpackage Structs
 */
class CreateUserResponse extends AbstractStructBase
{
    /**
     * The CreateUserResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CreateUserResult
     */
    public $CreateUserResult;
    /**
     * Constructor method for CreateUserResponse
     * @uses CreateUserResponse::setCreateUserResult()
     * @param \Nmusco\AssureSign\v2\StructType\CreateUserResult $createUserResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CreateUserResult $createUserResult = null)
    {
        $this
            ->setCreateUserResult($createUserResult);
    }
    /**
     * Get CreateUserResult value
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserResult|null
     */
    public function getCreateUserResult()
    {
        return $this->CreateUserResult;
    }
    /**
     * Set CreateUserResult value
     * @param \Nmusco\AssureSign\v2\StructType\CreateUserResult $createUserResult
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserResponse
     */
    public function setCreateUserResult(\Nmusco\AssureSign\v2\StructType\CreateUserResult $createUserResult = null)
    {
        $this->CreateUserResult = $createUserResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserResponse
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
