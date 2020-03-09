<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSignatories StructType
 * @subpackage Structs
 */
class ListSignatories extends AbstractStructBase
{
    /**
     * The SignatoryListQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryListQuery
     */
    public $SignatoryListQuery;
    /**
     * Constructor method for ListSignatories
     * @uses ListSignatories::setSignatoryListQuery()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListQuery $signatoryListQuery
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\SignatoryListQuery $signatoryListQuery = null)
    {
        $this
            ->setSignatoryListQuery($signatoryListQuery);
    }
    /**
     * Get SignatoryListQuery value
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListQuery|null
     */
    public function getSignatoryListQuery()
    {
        return $this->SignatoryListQuery;
    }
    /**
     * Set SignatoryListQuery value
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListQuery $signatoryListQuery
     * @return \Nmusco\AssureSign\v2\StructType\ListSignatories
     */
    public function setSignatoryListQuery(\Nmusco\AssureSign\v2\StructType\SignatoryListQuery $signatoryListQuery = null)
    {
        $this->SignatoryListQuery = $signatoryListQuery;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListSignatories
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
