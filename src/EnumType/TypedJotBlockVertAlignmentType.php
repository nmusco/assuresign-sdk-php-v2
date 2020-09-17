<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TypedJotBlockVertAlignmentType EnumType
 * @subpackage Enumerations
 */
class TypedJotBlockVertAlignmentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'Top'
     * @return string 'Top'
     */
    const VALUE_TOP = 'Top';
    /**
     * Constant for value 'Center'
     * @return string 'Center'
     */
    const VALUE_CENTER = 'Center';
    /**
     * Constant for value 'Bottom'
     * @return string 'Bottom'
     */
    const VALUE_BOTTOM = 'Bottom';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_TOP
     * @uses self::VALUE_CENTER
     * @uses self::VALUE_BOTTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_TOP,
            self::VALUE_CENTER,
            self::VALUE_BOTTOM,
        );
    }
}
