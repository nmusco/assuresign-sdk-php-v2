<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnvelopeDeclineBehaviorType EnumType
 * @subpackage Enumerations
 */
class EnvelopeDeclineBehaviorType extends AbstractStructEnumBase
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
}
