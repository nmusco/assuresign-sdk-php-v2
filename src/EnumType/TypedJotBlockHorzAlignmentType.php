<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TypedJotBlockHorzAlignmentType EnumType
 * @subpackage Enumerations
 */
class TypedJotBlockHorzAlignmentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'Left'
     * @return string 'Left'
     */
    const VALUE_LEFT = 'Left';
    /**
     * Constant for value 'Center'
     * @return string 'Center'
     */
    const VALUE_CENTER = 'Center';
    /**
     * Constant for value 'Right'
     * @return string 'Right'
     */
    const VALUE_RIGHT = 'Right';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_LEFT
     * @uses self::VALUE_CENTER
     * @uses self::VALUE_RIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_LEFT,
            self::VALUE_CENTER,
            self::VALUE_RIGHT,
        );
    }
}
