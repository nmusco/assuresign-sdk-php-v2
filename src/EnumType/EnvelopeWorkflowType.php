<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for EnvelopeWorkflowType EnumType
 * @subpackage Enumerations
 */
class EnvelopeWorkflowType
{
    /**
     * Constant for value 'Sequential'
     * @return string 'Sequential'
     */
    const VALUE_SEQUENTIAL = 'Sequential';
    /**
     * Constant for value 'Parallel'
     * @return string 'Parallel'
     */
    const VALUE_PARALLEL = 'Parallel';
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
     * @uses self::VALUE_SEQUENTIAL
     * @uses self::VALUE_PARALLEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SEQUENTIAL,
            self::VALUE_PARALLEL,
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
