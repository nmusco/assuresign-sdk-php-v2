<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for EnvelopeViewBehaviorType EnumType
 * @subpackage Enumerations
 */
class EnvelopeViewBehaviorType
{
    /**
     * Constant for value 'ViewSignatoryOnly'
     * @return string 'ViewSignatoryOnly'
     */
    const VALUE_VIEW_SIGNATORY_ONLY = 'ViewSignatoryOnly';
    /**
     * Constant for value 'ViewAll'
     * @return string 'ViewAll'
     */
    const VALUE_VIEW_ALL = 'ViewAll';
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
     * @uses self::VALUE_VIEW_SIGNATORY_ONLY
     * @uses self::VALUE_VIEW_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VIEW_SIGNATORY_ONLY,
            self::VALUE_VIEW_ALL,
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
