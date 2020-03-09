<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DrawnParameterItem StructType
 * @subpackage Structs
 */
class DrawnParameterItem extends ParameterItemBase
{
    /**
     * The DefaultValue
     * @var string
     */
    public $DefaultValue;
    /**
     * Constructor method for DrawnParameterItem
     * @uses DrawnParameterItem::setDefaultValue()
     * @param string $defaultValue
     */
    public function __construct($defaultValue = null)
    {
        $this
            ->setDefaultValue($defaultValue);
    }
    /**
     * Get DefaultValue value
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }
    /**
     * Set DefaultValue value
     * @param string $defaultValue
     * @return \Nmusco\AssureSign\v2\StructType\DrawnParameterItem
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->DefaultValue = $defaultValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DrawnParameterItem
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
