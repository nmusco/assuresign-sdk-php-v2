<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for JotBlockInputType EnumType
 * @subpackage Enumerations
 */
class JotBlockInputType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
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
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_SIGNATORY
     * @uses self::VALUE_PARAMETER
     * @uses self::VALUE_FIXED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_SIGNATORY,
            self::VALUE_PARAMETER,
            self::VALUE_FIXED,
        );
    }
}
