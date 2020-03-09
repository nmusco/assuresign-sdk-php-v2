<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for EnvelopeDeclineBehaviorType EnumType
 * @subpackage Enumerations
 */
class EnvelopeDeclineBehaviorType
{
    /**
     * Constant for value 'DeclineAll'
     * @return string 'DeclineAll'
     */
    const VALUE_DECLINE_ALL = 'DeclineAll';
    /**
     * Constant for value 'DeclineSingle'
     * @return string 'DeclineSingle'
     */
    const VALUE_DECLINE_SINGLE = 'DeclineSingle';
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
     * @uses self::VALUE_DECLINE_ALL
     * @uses self::VALUE_DECLINE_SINGLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DECLINE_ALL,
            self::VALUE_DECLINE_SINGLE,
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
