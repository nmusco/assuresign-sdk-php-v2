<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUserResponse StructType
 * @subpackage Structs
 */
class DeleteUserResponse extends AbstractStructBase
{
    /**
     * The DeleteUserResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DeleteUserResult
     */
    public $DeleteUserResult;
    /**
     * Constructor method for DeleteUserResponse
     * @uses DeleteUserResponse::setDeleteUserResult()
     * @param \Nmusco\AssureSign\v2\StructType\DeleteUserResult $deleteUserResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DeleteUserResult $deleteUserResult = null)
    {
        $this
            ->setDeleteUserResult($deleteUserResult);
    }
    /**
     * Get DeleteUserResult value
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserResult|null
     */
    public function getDeleteUserResult()
    {
        return $this->DeleteUserResult;
    }
    /**
     * Set DeleteUserResult value
     * @param \Nmusco\AssureSign\v2\StructType\DeleteUserResult $deleteUserResult
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserResponse
     */
    public function setDeleteUserResult(\Nmusco\AssureSign\v2\StructType\DeleteUserResult $deleteUserResult = null)
    {
        $this->DeleteUserResult = $deleteUserResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserResponse
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
