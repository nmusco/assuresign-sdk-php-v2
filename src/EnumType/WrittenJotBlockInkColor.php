<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WrittenJotBlockInkColor EnumType
 * @subpackage Enumerations
 */
class WrittenJotBlockInkColor extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'Black'
     * @return string 'Black'
     */
    const VALUE_BLACK = 'Black';
    /**
     * Constant for value 'Blue'
     * @return string 'Blue'
     */
    const VALUE_BLUE = 'Blue';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_BLACK
     * @uses self::VALUE_BLUE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_BLACK,
            self::VALUE_BLUE,
        );
    }
}
