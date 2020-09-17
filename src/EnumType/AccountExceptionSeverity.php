<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AccountExceptionSeverity EnumType
 * @subpackage Enumerations
 */
class AccountExceptionSeverity extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Warning'
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Fatal'
     * @return string 'Fatal'
     */
    const VALUE_FATAL = 'Fatal';
    /**
     * Return allowed values
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_FATAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WARNING,
            self::VALUE_ERROR,
            self::VALUE_FATAL,
        );
    }
}
