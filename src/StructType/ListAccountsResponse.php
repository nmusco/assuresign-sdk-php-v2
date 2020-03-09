<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListAccountsResponse StructType
 * @subpackage Structs
 */
class ListAccountsResponse extends AbstractStructBase
{
    /**
     * The ListAccountsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ListAccountsResult
     */
    public $ListAccountsResult;
    /**
     * Constructor method for ListAccountsResponse
     * @uses ListAccountsResponse::setListAccountsResult()
     * @param \Nmusco\AssureSign\v2\StructType\ListAccountsResult $listAccountsResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ListAccountsResult $listAccountsResult = null)
    {
        $this
            ->setListAccountsResult($listAccountsResult);
    }
    /**
     * Get ListAccountsResult value
     * @return \Nmusco\AssureSign\v2\StructType\ListAccountsResult|null
     */
    public function getListAccountsResult()
    {
        return $this->ListAccountsResult;
    }
    /**
     * Set ListAccountsResult value
     * @param \Nmusco\AssureSign\v2\StructType\ListAccountsResult $listAccountsResult
     * @return \Nmusco\AssureSign\v2\StructType\ListAccountsResponse
     */
    public function setListAccountsResult(\Nmusco\AssureSign\v2\StructType\ListAccountsResult $listAccountsResult = null)
    {
        $this->ListAccountsResult = $listAccountsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListAccountsResponse
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
