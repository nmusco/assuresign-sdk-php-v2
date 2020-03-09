<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for FieldVerticalAlignmentType EnumType
 * @subpackage Enumerations
 */
class FieldVerticalAlignmentType
{
    /**
     * Constant for value 'Top'
     * @return string 'Top'
     */
    const VALUE_TOP = 'Top';
    /**
     * Constant for value 'Center'
     * @return string 'Center'
     */
    const VALUE_CENTER = 'Center';
    /**
     * Constant for value 'Bottom'
     * @return string 'Bottom'
     */
    const VALUE_BOTTOM = 'Bottom';
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
     * @uses self::VALUE_TOP
     * @uses self::VALUE_CENTER
     * @uses self::VALUE_BOTTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TOP,
            self::VALUE_CENTER,
            self::VALUE_BOTTOM,
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
