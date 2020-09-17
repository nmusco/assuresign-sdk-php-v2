<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DownloadType EnumType
 * @subpackage Enumerations
 */
class DownloadType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'Interim'
     * @return string 'Interim'
     */
    const VALUE_INTERIM = 'Interim';
    /**
     * Constant for value 'Original'
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Return allowed values
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_INTERIM
     * @uses self::VALUE_ORIGINAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMPLETED,
            self::VALUE_INTERIM,
            self::VALUE_ORIGINAL,
        );
    }
}
