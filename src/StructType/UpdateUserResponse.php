<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUserResponse StructType
 * @subpackage Structs
 */
class UpdateUserResponse extends AbstractStructBase
{
    /**
     * The UpdateUserResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\UpdateUserResult
     */
    public $UpdateUserResult;
    /**
     * Constructor method for UpdateUserResponse
     * @uses UpdateUserResponse::setUpdateUserResult()
     * @param \Nmusco\AssureSign\v2\StructType\UpdateUserResult $updateUserResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\UpdateUserResult $updateUserResult = null)
    {
        $this
            ->setUpdateUserResult($updateUserResult);
    }
    /**
     * Get UpdateUserResult value
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserResult|null
     */
    public function getUpdateUserResult()
    {
        return $this->UpdateUserResult;
    }
    /**
     * Set UpdateUserResult value
     * @param \Nmusco\AssureSign\v2\StructType\UpdateUserResult $updateUserResult
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserResponse
     */
    public function setUpdateUserResult(\Nmusco\AssureSign\v2\StructType\UpdateUserResult $updateUserResult = null)
    {
        $this->UpdateUserResult = $updateUserResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserResponse
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
