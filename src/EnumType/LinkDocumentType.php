<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LinkDocumentType EnumType
 * @subpackage Enumerations
 */
class LinkDocumentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Original'
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Constant for value 'Interim'
     * @return string 'Interim'
     */
    const VALUE_INTERIM = 'Interim';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Return allowed values
     * @uses self::VALUE_ORIGINAL
     * @uses self::VALUE_INTERIM
     * @uses self::VALUE_COMPLETED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORIGINAL,
            self::VALUE_INTERIM,
            self::VALUE_COMPLETED,
        );
    }
}
