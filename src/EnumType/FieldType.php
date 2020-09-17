<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FieldType EnumType
 * @subpackage Enumerations
 */
class FieldType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Written'
     * @return string 'Written'
     */
    const VALUE_WRITTEN = 'Written';
    /**
     * Constant for value 'Typed'
     * @return string 'Typed'
     */
    const VALUE_TYPED = 'Typed';
    /**
     * Return allowed values
     * @uses self::VALUE_WRITTEN
     * @uses self::VALUE_TYPED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WRITTEN,
            self::VALUE_TYPED,
        );
    }
}
