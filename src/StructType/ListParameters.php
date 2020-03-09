<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListParameters StructType
 * @subpackage Structs
 */
class ListParameters extends AbstractStructBase
{
    /**
     * The ParameterListQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ParameterListQuery
     */
    public $ParameterListQuery;
    /**
     * Constructor method for ListParameters
     * @uses ListParameters::setParameterListQuery()
     * @param \Nmusco\AssureSign\v2\StructType\ParameterListQuery $parameterListQuery
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ParameterListQuery $parameterListQuery = null)
    {
        $this
            ->setParameterListQuery($parameterListQuery);
    }
    /**
     * Get ParameterListQuery value
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListQuery|null
     */
    public function getParameterListQuery()
    {
        return $this->ParameterListQuery;
    }
    /**
     * Set ParameterListQuery value
     * @param \Nmusco\AssureSign\v2\StructType\ParameterListQuery $parameterListQuery
     * @return \Nmusco\AssureSign\v2\StructType\ListParameters
     */
    public function setParameterListQuery(\Nmusco\AssureSign\v2\StructType\ParameterListQuery $parameterListQuery = null)
    {
        $this->ParameterListQuery = $parameterListQuery;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListParameters
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
