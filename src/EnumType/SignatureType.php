<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for SignatureType EnumType
 * @subpackage Enumerations
 */
class SignatureType
{
    /**
     * Constant for value 'Signature'
     * @return string 'Signature'
     */
    const VALUE_SIGNATURE = 'Signature';
    /**
     * Constant for value 'Initials'
     * @return string 'Initials'
     */
    const VALUE_INITIALS = 'Initials';
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
     * @uses self::VALUE_SIGNATURE
     * @uses self::VALUE_INITIALS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SIGNATURE,
            self::VALUE_INITIALS,
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
