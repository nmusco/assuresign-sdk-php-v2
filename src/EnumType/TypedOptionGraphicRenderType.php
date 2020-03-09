<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for TypedOptionGraphicRenderType EnumType
 * @subpackage Enumerations
 */
class TypedOptionGraphicRenderType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Empty'
     * @return string 'Empty'
     */
    const VALUE_EMPTY = 'Empty';
    /**
     * Constant for value 'Check'
     * @return string 'Check'
     */
    const VALUE_CHECK = 'Check';
    /**
     * Constant for value 'X'
     * @return string 'X'
     */
    const VALUE_X = 'X';
    /**
     * Constant for value 'NoBoxEmpty'
     * @return string 'NoBoxEmpty'
     */
    const VALUE_NO_BOX_EMPTY = 'NoBoxEmpty';
    /**
     * Constant for value 'NoBoxCheck'
     * @return string 'NoBoxCheck'
     */
    const VALUE_NO_BOX_CHECK = 'NoBoxCheck';
    /**
     * Constant for value 'NoBoxX'
     * @return string 'NoBoxX'
     */
    const VALUE_NO_BOX_X = 'NoBoxX';
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_EMPTY
     * @uses self::VALUE_CHECK
     * @uses self::VALUE_X
     * @uses self::VALUE_NO_BOX_EMPTY
     * @uses self::VALUE_NO_BOX_CHECK
     * @uses self::VALUE_NO_BOX_X
     * @uses self::VALUE_TEXT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_EMPTY,
            self::VALUE_CHECK,
            self::VALUE_X,
            self::VALUE_NO_BOX_EMPTY,
            self::VALUE_NO_BOX_CHECK,
            self::VALUE_NO_BOX_X,
            self::VALUE_TEXT,
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
