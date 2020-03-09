<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for JotBlockBorderType EnumType
 * @subpackage Enumerations
 */
class JotBlockBorderType
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Bottom'
     * @return string 'Bottom'
     */
    const VALUE_BOTTOM = 'Bottom';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_NONE
     * @uses self::VALUE_BOTTOM
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_NONE,
            self::VALUE_BOTTOM,
            self::VALUE_ALL,
        );
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
