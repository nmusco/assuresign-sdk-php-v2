<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for FieldInputType EnumType
 * @subpackage Enumerations
 */
class FieldInputType
{
    /**
     * Constant for value 'Signatory'
     * @return string 'Signatory'
     */
    const VALUE_SIGNATORY = 'Signatory';
    /**
     * Constant for value 'Parameter'
     * @return string 'Parameter'
     */
    const VALUE_PARAMETER = 'Parameter';
    /**
     * Constant for value 'Fixed'
     * @return string 'Fixed'
     */
    const VALUE_FIXED = 'Fixed';
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
     * @uses self::VALUE_SIGNATORY
     * @uses self::VALUE_PARAMETER
     * @uses self::VALUE_FIXED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SIGNATORY,
            self::VALUE_PARAMETER,
            self::VALUE_FIXED,
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
