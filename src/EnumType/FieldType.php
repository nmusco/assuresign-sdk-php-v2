<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for FieldType EnumType
 * @subpackage Enumerations
 */
class FieldType
{
    /**
     * Constant for value 'Written'
     * @return string 'Written'
     */
    const VALUE_WRITTEN = 'Written';
    /**
     * Constant for value 'Typed'
     * @return string 'Typed'
     */
    const VALUE_TYPED = 'Typed';
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
     * @uses self::VALUE_WRITTEN
     * @uses self::VALUE_TYPED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WRITTEN,
            self::VALUE_TYPED,
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
