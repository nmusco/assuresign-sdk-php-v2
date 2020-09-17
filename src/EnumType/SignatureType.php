<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SignatureType EnumType
 * @subpackage Enumerations
 */
class SignatureType extends AbstractStructEnumBase
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
}
