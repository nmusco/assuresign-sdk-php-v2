<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnvelopeViewBehaviorType EnumType
 * @subpackage Enumerations
 */
class EnvelopeViewBehaviorType extends AbstractStructEnumBase
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
}
