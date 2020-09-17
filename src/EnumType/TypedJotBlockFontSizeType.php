<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TypedJotBlockFontSizeType EnumType
 * @subpackage Enumerations
 */
class TypedJotBlockFontSizeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'Six'
     * @return string 'Six'
     */
    const VALUE_SIX = 'Six';
    /**
     * Constant for value 'Eight'
     * @return string 'Eight'
     */
    const VALUE_EIGHT = 'Eight';
    /**
     * Constant for value 'Ten'
     * @return string 'Ten'
     */
    const VALUE_TEN = 'Ten';
    /**
     * Constant for value 'Twelve'
     * @return string 'Twelve'
     */
    const VALUE_TWELVE = 'Twelve';
    /**
     * Constant for value 'Fourteen'
     * @return string 'Fourteen'
     */
    const VALUE_FOURTEEN = 'Fourteen';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_SIX
     * @uses self::VALUE_EIGHT
     * @uses self::VALUE_TEN
     * @uses self::VALUE_TWELVE
     * @uses self::VALUE_FOURTEEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_SIX,
            self::VALUE_EIGHT,
            self::VALUE_TEN,
            self::VALUE_TWELVE,
            self::VALUE_FOURTEEN,
        );
    }
}
