<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for DownloadType EnumType
 * @subpackage Enumerations
 */
class DownloadType
{
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'Interim'
     * @return string 'Interim'
     */
    const VALUE_INTERIM = 'Interim';
    /**
     * Constant for value 'Original'
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
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
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_INTERIM
     * @uses self::VALUE_ORIGINAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMPLETED,
            self::VALUE_INTERIM,
            self::VALUE_ORIGINAL,
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