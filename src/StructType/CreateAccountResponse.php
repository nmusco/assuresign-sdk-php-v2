<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAccountResponse StructType
 * @subpackage Structs
 */
class CreateAccountResponse extends AbstractStructBase
{
    /**
     * The CreateAccountResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CreateAccountResult
     */
    public $CreateAccountResult;
    /**
     * Constructor method for CreateAccountResponse
     * @uses CreateAccountResponse::setCreateAccountResult()
     * @param \Nmusco\AssureSign\v2\StructType\CreateAccountResult $createAccountResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CreateAccountResult $createAccountResult = null)
    {
        $this
            ->setCreateAccountResult($createAccountResult);
    }
    /**
     * Get CreateAccountResult value
     * @return \Nmusco\AssureSign\v2\StructType\CreateAccountResult|null
     */
    public function getCreateAccountResult()
    {
        return $this->CreateAccountResult;
    }
    /**
     * Set CreateAccountResult value
     * @param \Nmusco\AssureSign\v2\StructType\CreateAccountResult $createAccountResult
     * @return \Nmusco\AssureSign\v2\StructType\CreateAccountResponse
     */
    public function setCreateAccountResult(\Nmusco\AssureSign\v2\StructType\CreateAccountResult $createAccountResult = null)
    {
        $this->CreateAccountResult = $createAccountResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CreateAccountResponse
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
