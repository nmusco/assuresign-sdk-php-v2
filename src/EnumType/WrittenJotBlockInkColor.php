<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for WrittenJotBlockInkColor EnumType
 * @subpackage Enumerations
 */
class WrittenJotBlockInkColor
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'Black'
     * @return string 'Black'
     */
    const VALUE_BLACK = 'Black';
    /**
     * Constant for value 'Blue'
     * @return string 'Blue'
     */
    const VALUE_BLUE = 'Blue';
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
     * @uses self::VALUE_BLACK
     * @uses self::VALUE_BLUE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_BLACK,
            self::VALUE_BLUE,
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
