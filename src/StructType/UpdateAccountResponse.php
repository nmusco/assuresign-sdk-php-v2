<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAccountResponse StructType
 * @subpackage Structs
 */
class UpdateAccountResponse extends AbstractStructBase
{
    /**
     * The UpdateAccountResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\UpdateAccountResult
     */
    public $UpdateAccountResult;
    /**
     * Constructor method for UpdateAccountResponse
     * @uses UpdateAccountResponse::setUpdateAccountResult()
     * @param \Nmusco\AssureSign\v2\StructType\UpdateAccountResult $updateAccountResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\UpdateAccountResult $updateAccountResult = null)
    {
        $this
            ->setUpdateAccountResult($updateAccountResult);
    }
    /**
     * Get UpdateAccountResult value
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountResult|null
     */
    public function getUpdateAccountResult()
    {
        return $this->UpdateAccountResult;
    }
    /**
     * Set UpdateAccountResult value
     * @param \Nmusco\AssureSign\v2\StructType\UpdateAccountResult $updateAccountResult
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountResponse
     */
    public function setUpdateAccountResult(\Nmusco\AssureSign\v2\StructType\UpdateAccountResult $updateAccountResult = null)
    {
        $this->UpdateAccountResult = $updateAccountResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountResponse
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
