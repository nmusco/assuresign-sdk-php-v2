<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSignatoriesResponse StructType
 * @subpackage Structs
 */
class ListSignatoriesResponse extends AbstractStructBase
{
    /**
     * The SignatoryListQueryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult
     */
    public $SignatoryListQueryResult;
    /**
     * Constructor method for ListSignatoriesResponse
     * @uses ListSignatoriesResponse::setSignatoryListQueryResult()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult $signatoryListQueryResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult $signatoryListQueryResult = null)
    {
        $this
            ->setSignatoryListQueryResult($signatoryListQueryResult);
    }
    /**
     * Get SignatoryListQueryResult value
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult|null
     */
    public function getSignatoryListQueryResult()
    {
        return $this->SignatoryListQueryResult;
    }
    /**
     * Set SignatoryListQueryResult value
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult $signatoryListQueryResult
     * @return \Nmusco\AssureSign\v2\StructType\ListSignatoriesResponse
     */
    public function setSignatoryListQueryResult(\Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult $signatoryListQueryResult = null)
    {
        $this->SignatoryListQueryResult = $signatoryListQueryResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListSignatoriesResponse
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
