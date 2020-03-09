<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for FieldHorizontalAlignmentType EnumType
 * @subpackage Enumerations
 */
class FieldHorizontalAlignmentType
{
    /**
     * Constant for value 'Left'
     * @return string 'Left'
     */
    const VALUE_LEFT = 'Left';
    /**
     * Constant for value 'Center'
     * @return string 'Center'
     */
    const VALUE_CENTER = 'Center';
    /**
     * Constant for value 'Right'
     * @return string 'Right'
     */
    const VALUE_RIGHT = 'Right';
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
     * @uses self::VALUE_LEFT
     * @uses self::VALUE_CENTER
     * @uses self::VALUE_RIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LEFT,
            self::VALUE_CENTER,
            self::VALUE_RIGHT,
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
